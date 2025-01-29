<?php

namespace App\Modules\Product\GraphQL\Types;

use App\Core\Facades\Graphql;
use App\Core\GraphQL\Type\BaseType;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class PropertyValueType extends BaseType
{
    protected static function defineType(): ObjectType
    {
        return Graphql::type('Property', 'Property Object')
            ->addField('id', Type::nonNull(Type::int()))
            ->addField('priority', Type::nonNull(Type::string()))
            ->addField('value', Type::nonNull(Type::string()))
            ->addField('priority', Type::int())
            ->addField('property_id', Type::nonNull(Type::int()))
            ->addField('product_id', Type::nonNull(Type::int()))
            ->build();
    }
}