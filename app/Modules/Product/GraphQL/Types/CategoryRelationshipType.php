<?php

namespace App\Modules\Product\GraphQL\Types;

use App\Core\Facades\Graphql;
use App\Core\GraphQL\Type\BaseType;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;
class CategoryRelationshipType extends BaseType
{
    protected static function defineType(): ObjectType
    {
        return Graphql::type('CategoryRelationship', 'Category Relationship Object')
            ->addField('id', Type::nonNull(Type::int()))
            ->addField('parent_id', Type::nonNull(Type::int()))
            ->addField('child_id', Type::nonNull(Type::int()))
            ->addField('priority', Type::int())
            ->addField('nick_name', Type::string())
            ->build();
    }
}