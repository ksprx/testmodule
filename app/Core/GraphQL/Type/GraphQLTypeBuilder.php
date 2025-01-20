<?php

namespace App\Core\GraphQL\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class GraphQLTypeBuilder extends BaseTypeBuilder
{
    /**
     * Add field
     *
     * @param string $name
     * @param Type $type
     * @param String $description
     * @return $this
     */
    public function addField(string $name, Type $type, string|array $description = ''): static
    {
        $this->config['fields'][$name] = [
            'type' => $type,
            'description' => $description
        ];
        return $this;
    }

    public function build() : ObjectType
    {
        if (!isset($this->config['name'])) {
            throw new \Exception("The 'name' property is required to build a GraphQL type.");
        }

        if (!isset($this->config['fields']) || empty($this->config['fields'])) {
            throw new \Exception("The 'fields' property must be defined with at least one field.");
        }

        return new ObjectType($this->config);
    }
}
