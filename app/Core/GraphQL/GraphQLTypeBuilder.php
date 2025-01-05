<?php

namespace App\Core\GraphQL;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class GraphQLTypeBuilder
{
    private $config = [];

    public function __construct(string $name, string $description = '')
    {
        $this->config['name'] = $name;
        $this->config['description'] = $description;
    }

    /**
     * افزودن فیلد به تایپ
     *
     * @param string $name
     * @param Type $type
     * @param String $description
     * @return $this
     */
    public function addField(string $name, Type $type, string $description = '')
    {
        $this->config['fields'][$name] = [
            'type' => $type,
            'description' => $description
        ];
        return $this;
    }

    /**
     * ساخت تایپ
     *
     * @return ObjectType
     */

    /**
     * Convert schema definition to array format for GraphQL
     *
     * @return array
     */
    public function toArray(): array
    {
        return $this->config;
    }

    public function build(): ObjectType
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
