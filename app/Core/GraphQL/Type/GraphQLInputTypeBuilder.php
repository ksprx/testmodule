<?php

namespace App\Core\GraphQL\Type;

use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Definition\Type;

class GraphQLInputTypeBuilder extends BaseTypeBuilder
{
    /**
     * Add field
     *
     * @param string $name
     * @param Type $type
     * @param string|array $validator
     * @return $this
     */
    public function addField(string $name, Type $type, string|array $validator = ''): static
    {
        $this->config['fields'][$name] = [
            'type' => $type,
            'description' => $validator,
        ];
        return $this;
    }

    public function build(): InputObjectType
    {
        if (!isset($this->config['name'])) {
            throw new \Exception("The 'name' property is required to build a GraphQL type.");
        }

        if (!isset($this->config['fields']) || empty($this->config['fields'])) {
            throw new \Exception("The 'fields' property must be defined with at least one field.");
        }

        return new InputObjectType($this->config);
    }

}
