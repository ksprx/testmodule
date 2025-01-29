<?php

namespace App\Modules\Product\GraphQL\Types;

use App\Core\Facades\Graphql;
use App\Core\GraphQL\Type\BaseType;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class ProductType extends BaseType
{
    protected static function defineType(): ObjectType
    {
        return Graphql::type('Product', 'Product Object')
            ->addField('id', Type::nonNull(Type::int()))
            ->addField('fa_name', Type::nonNull(Type::string()))
            ->addField('en_name', Type::nonNull(Type::string()))
            ->addField('category_id', Type::nonNull(Type::int()))
            ->addField('slug', Type::nonNull(Type::string()))
            ->addField('is_original', Type::boolean())
            ->addField('is_active', Type::boolean())
            ->addField('brand_id', Type::nonNull(Type::int()))
            ->build();
    }
}