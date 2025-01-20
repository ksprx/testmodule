<?php

namespace App\Core\GraphQL\Type;

use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Definition\ObjectType;

abstract class BaseType
{
    private static array $instances = [];

    abstract protected static function defineType(): ObjectType|AmadayInputObjectType;

    public static function build()
    {
        $className = static::class;
        if (!isset(self::$instances[$className])) {
            self::$instances[$className] = (new static)::defineType();
        }
        return self::$instances[$className];
    }
}