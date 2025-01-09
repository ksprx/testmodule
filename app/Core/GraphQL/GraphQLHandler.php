<?php


namespace App\Core\GraphQL;

use App\Core\Request\Request;
use GraphQL\Error\DebugFlag;
use GraphQL\Error\Error;
use GraphQL\GraphQL;
use GraphQL\Type\Schema;
use GraphQL\Validator\DocumentValidator;
use GraphQL\Validator\Rules\DisableIntrospection;

class GraphQLHandler
{
    protected Schema $schema;

    public function __construct(Request $request)
    {
        $SchemaManager = SchemaManager::getInstance();
        $schemas = $SchemaManager->loadSchemas($request);


        $this->schema = new Schema([
            'query' => @$schemas['query'],
            'mutation' => @$schemas['mutation'],
            'type' => @$schemas['type'],
            'introspection' => false,
        ]);
    }

    /**
     * @param string $query
     * @param array|null $variables
     * @return array
     * @throws \Exception
     */
    public function handle(string $query, ?array $variables = null): array
    {
        if (empty($query)) {
            throw new \InvalidArgumentException('Query string cannot be empty');
        }
        try {
            if (env("APP_ENV") !== "local") {
                DocumentValidator::addRule((new DisableIntrospection(DisableIntrospection::ENABLED)));
            }
            return GraphQL::executeQuery($this->schema, $query, null, null, $variables)->toArray(DebugFlag::INCLUDE_DEBUG_MESSAGE);
        } catch (\Exception $e) {
            throw new Error("Error executing GraphQL query: " . $e->getMessage());
        }
    }
}
