<?php

namespace App\Core\Facades;

use App\Core\GraphQL\GraphQLInputTypeBuilder;
use App\Core\GraphQL\GraphQLTypeBuilder;
use App\Core\GraphQL\SchemaDefinition;

/**
 * @method static SchemaDefinition group(array $options, callable $callback)
 * @method static SchemaDefinition query(string $name, $resolver)
 * @method static SchemaDefinition mutation(string $name, $resolver)
 * @method static GraphQLTypeBuilder type(string $name, string $description)
 * @method static GraphQLInputTypeBuilder inputType(string $name, string $description)
 */
class Graphql extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \App\Core\GraphQL\Graphql::class;
    }
}
