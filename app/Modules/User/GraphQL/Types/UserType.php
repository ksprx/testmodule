<?php

namespace App\Modules\User\GraphQL\Types;
use App\Core\Facades\Graphql;
use App\Core\GraphQL\Type\BaseType;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class UserType extends BaseType
{
    protected static function defineType(): ObjectType
    {
        return Graphql::type('User', 'User Object')
            ->addField('id', Type::id(),"id val")
            ->addField('phone_number', Type::string())
            ->addField('email', Type::string())
            ->addField('username', Type::string())
            ->addField('first_name', Type::string())
            ->addField('last_name', Type::string())
            ->addField('is2_fa_active', Type::boolean())
            ->build();
    }
}