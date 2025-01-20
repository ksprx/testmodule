<?php

namespace App\Core\GraphQL;

use App\Core\GraphQL\Schema\SchemaDefinition;
use App\Core\GraphQL\Type\GraphQLInputTypeBuilder;
use App\Core\GraphQL\Type\GraphQLTypeBuilder;

class Graphql
{
    protected array $queries = [];
    protected array $mutations = [];
    protected array $types = [];
    protected array $groupStack = [];

    /**
     * Group related queries or mutations together
     *
     * @param array $options
     * @param callable $callback
     * @return void
     */
    public function group(array $options, callable $callback): void
    {
        $currentGroup = end($this->groupStack) ?: [];

        $newGroup = [
            'prefix' => @$currentGroup['prefix'] . (@$options['prefix'] ?? ''),
            'suffix' => @$currentGroup['suffix'] . (@$options['suffix'] ?? ''),
            'middleware' => array_merge($currentGroup['middleware'] ?? [], $options['middleware'] ?? []),
        ];

        $this->groupStack[] = $newGroup;

        $callback($this);

        array_pop($this->groupStack);
    }

    /**
     * Define a query with a resolver
     *
     * @param string $name
     * @param  $resolver
     * @return SchemaDefinition
     */
    public function query(string $name, $resolver): SchemaDefinition
    {
        $currentGroup = end($this->groupStack) ?: null;
        $query = new SchemaDefinition($name, $resolver, $currentGroup);
        $this->queries[] = $query;
        return $query;
    }

    /**
     * Define a type
     *
     * @param string $name
     * @param string $description
     * @return GraphQLTypeBuilder
     */
    public function type(string $name, string $description = ''): GraphQLTypeBuilder
    {
        $currentGroup = end($this->groupStack) ?: null;
        $type = new GraphQLTypeBuilder($name, $description,$currentGroup);
        $this->types[] = $type;
        return $type;
    }
    /**
     * Define a input type
     *
     * @param string $name
     * @param string $description
     * @return GraphQLInputTypeBuilder
     */
    public static function inputType(string $name, string $description = ''): GraphQLInputTypeBuilder
    {
        return new GraphQLInputTypeBuilder($name, $description);
    }
    /**
     * Define a mutation with a resolver
     *
     * @param string $name
     * @param  $resolver
     * @return SchemaDefinition
     */
    public function mutation(string $name, $resolver): SchemaDefinition
    {
        $currentGroup = end($this->groupStack) ?: null;
        $mutation = new SchemaDefinition($name, $resolver, $currentGroup);
        $this->mutations[] = $mutation;
        return $mutation;
    }

    /**
     * Build the schema by returning queries and mutations as arrays
     *
     * @return array
     */
    public function build(): array
    {
        return [
            'query' => $this->mapToArray($this->queries),
            'mutation' => $this->mapToArray($this->mutations),
            'type' => $this->mapToArray($this->types),
        ];
    }

    /**
     * Helper method to convert SchemaDefinitions to arrays
     *
     * @param array $items
     * @return array
     */
    private function mapToArray(array $items): array
    {
        return array_map(fn($item) => $item->toArray(), $items);
    }
}
