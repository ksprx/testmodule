<?php

namespace App\Modules\User\GraphQL\Types;

use App\Core\Facades\Graphql;
use App\Core\GraphQL\Type\BaseType;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class NotificationTypeChannelType extends BaseType
{
    protected static function defineType(): ObjectType
    {
        return Graphql::type('NotificationTypeChannel', 'Notification Type Channel Object')
            ->addField('name', Type::string())
            ->addField('id', Type::id())
            ->build();
    }
}