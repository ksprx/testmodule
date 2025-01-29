<?php

namespace App\Modules\Product\GraphQL\Types;

use App\Core\Facades\Graphql;
use App\Core\GraphQL\Type\BaseType;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class UpdateResponseType extends BaseType
{
    protected static function defineType(): ObjectType
    {
        return Graphql::type('UpdateResponse', 'All User Update Response')
            ->addField('status', Type::boolean())
            ->addField('message', Type::string())
            ->build();
    }

}