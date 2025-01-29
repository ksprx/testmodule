<?php

namespace App\Modules\Product\GraphQL\Types;

use App\Core\Facades\Graphql;
use App\Core\GraphQL\Type\BaseType;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class BoxType extends BaseType
{
    protected static function defineType(): ObjectType
    {
        return Graphql::type('Box', 'Box Object')
            ->addField('id', Type::nonNull(Type::int()))
            ->addField('fa_name', Type::nonNull(Type::string()))
            ->addField('en_name', Type::nonNull(Type::string()))
            ->addField('priority', Type::int())
            ->addField('category_id', Type::nonNull(Type::int()))
            ->build();
    }
}