<?php

use App\Core\Facades\Graphql;

Graphql::query("index", function () {
    return "ok";
})
    ->type(\GraphQL\Type\Definition\Type::string());
Graphql::group(['suffix' => "Profile"], function () {
    Graphql::query("get", [\App\Modules\User\Controllers\ProfileController::class, 'show'])
        ->type(\App\Modules\User\GraphQL\Types\ProfileType::build());

    Graphql::mutation("update", [\App\Modules\User\Controllers\ProfileController::class, 'update'])
        ->type(\App\Modules\User\GraphQL\Types\UpdateResponseType::build())
        ->argument('birth_date', \GraphQL\Type\Definition\Type::string())
        ->argument('alternative_phone_number', \GraphQL\Type\Definition\Type::string())
        ->argument('landline_phone', \GraphQL\Type\Definition\Type::string())
        ->argument('postal_code', \GraphQL\Type\Definition\Type::string())
        ->argument('province', \GraphQL\Type\Definition\Type::string())
        ->argument('city', \GraphQL\Type\Definition\Type::string())
        ->argument('address', \GraphQL\Type\Definition\Type::string())
        ->argument('profile_image', \GraphQL\Type\Definition\Type::string())
        ->argument('national_code', \GraphQL\Type\Definition\Type::string());
});
Graphql::group(['suffix' => "User"], function () {
    Graphql::query("get", [\App\Modules\User\Controllers\UserController::class, 'show'])
        ->type(\App\Modules\User\GraphQL\Types\UserType::build());

    Graphql::mutation("update", [\App\Modules\User\Controllers\UserController::class, 'update'])
        ->type(\App\Modules\User\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::id())
        ->argument('phone_number', \GraphQL\Type\Definition\Type::string())
        ->argument('email', \GraphQL\Type\Definition\Type::string())
        ->argument('username', \GraphQL\Type\Definition\Type::string())
        ->argument('first_name', \GraphQL\Type\Definition\Type::string())
        ->argument('last_name', \GraphQL\Type\Definition\Type::string())
        ->argument('is2_fa_active', \GraphQL\Type\Definition\Type::boolean());
});

Graphql::group(['suffix' => "NotificationChannel"], function () {
    Graphql::query("get", [\App\Modules\User\Controllers\NotificationChannelController::class, 'get'])
        ->type(\App\Modules\User\GraphQL\Types\NotificationChannelType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::id()));

    Graphql::query("all", [\App\Modules\User\Controllers\NotificationChannelController::class, 'all'])
        ->type(\GraphQL\Type\Definition\Type::listOf(\App\Modules\User\GraphQL\Types\NotificationChannelType::build()));

    Graphql::mutation("delete", [\App\Modules\User\Controllers\NotificationChannelController::class, 'delete'])
        ->type(\App\Modules\User\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::id()));

    Graphql::mutation("update", [\App\Modules\User\Controllers\NotificationChannelController::class, 'update'])
        ->type(\App\Modules\User\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::id()))
        ->argument('channel_value', \GraphQL\Type\Definition\Type::string())
        ->argument('is_active', \GraphQL\Type\Definition\Type::boolean());

    Graphql::mutation("create", [\App\Modules\User\Controllers\NotificationChannelController::class, 'create'])
        ->type(\App\Modules\User\GraphQL\Types\UpdateResponseType::build())
        ->argument('channel_type_id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::id()))
        ->argument('channel_value', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()));
});
