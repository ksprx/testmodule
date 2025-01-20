<?php

namespace App\Core\GraphQL\Type;

use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Definition\ObjectType;

abstract class BaseTypeBuilder implements BaseTypeBuilderInterface
{
    protected $config = [];

    public function __construct(string $name, string $description = '', array $group = null)
    {

        if ($group) {
            $prefix = $group['prefix'] ?? '';
            $suffix = $group['suffix'] ?? '';
            $this->config['name'] = $prefix ? $prefix . $name : $name;
            if ($suffix) {
                $this->config['name'] .= $suffix;
            }
        } else {
            $this->config['name'] = $name;
        }
        $this->config['description'] = $description;
    }



    /**
     * Convert schema definition to array format for GraphQL
     *
     * @return array
     */
    public function toArray(): array
    {
        return $this->config;
    }

    abstract public function build() : ObjectType|AmadayInputObjectType;
}
