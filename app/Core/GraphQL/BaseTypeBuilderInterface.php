<?php

namespace App\Core\GraphQL;

use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

interface BaseTypeBuilderInterface
{
    public function toArray(): array;

    public function build(): ObjectType|InputObjectType;

    public function addField(string $name, Type $type, string|array $desORvalidator = ''): static;
}