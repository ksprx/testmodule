<?php

namespace App\Modules\User\GraphQL\Types;

use App\Core\Facades\Graphql;
use App\Core\GraphQL\Type\BaseType;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class ProfileType extends BaseType
{
    protected static function defineType(): ObjectType
    {
        return Graphql::type('UserProfile', 'User Profile Object')
            ->addField('birth_date', Type::string())
            ->addField('alternative_phone_number', Type::string())
            ->addField('landline_phone', Type::string())
            ->addField('postal_code', Type::string())
            ->addField('province', Type::string())
            ->addField('city', Type::string())
            ->addField('address', Type::string())
            ->addField('profile_image', Type::string())
            ->addField('national_code', Type::string())
            ->build();
    }


}