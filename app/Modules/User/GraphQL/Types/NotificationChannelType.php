<?php

namespace App\Modules\User\GraphQL\Types;

use App\Core\Facades\Graphql;
use App\Core\GraphQL\Type\BaseType;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class NotificationChannelType extends BaseType
{
    protected static function defineType(): ObjectType
    {
        return Graphql::type('NotificationChannel', 'Notification Channel Object')
            ->addField('channel_value', Type::string())
            ->addField('channel_type', NotificationTypeChannelType::build())
            ->addField('is_active', Type::boolean())
            ->addField('created_at', Type::string())
            ->addField('updated_at', Type::string())
            ->build();
    }

}