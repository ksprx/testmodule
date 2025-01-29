<?php

use App\Core\Facades\Graphql;

Graphql::group(["suffix" => "Sms"], function () {
    Graphql::mutation('send', [\App\Modules\Notification\Controllers\SmsController::class, 'send'])
        ->type(\App\Modules\Notification\GraphQL\Types\UpdateResponseType::build())
        ->argument("receptor", \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument("message", \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()));

    Graphql::mutation('pattern', [\App\Modules\Notification\Controllers\SmsController::class, 'pattern'])
        ->type(\App\Modules\Notification\GraphQL\Types\UpdateResponseType::build())
        ->argument("receptor", \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument("token", \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument("token2", \GraphQL\Type\Definition\Type::string())
        ->argument("token3", \GraphQL\Type\Definition\Type::string())
        ->argument("template", \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()));
});
Graphql::group(["suffix" => "Email"], function () {
    Graphql::mutation('send', [\App\Modules\Notification\Controllers\EmailController::class, 'send'])
        ->type(\App\Modules\Notification\GraphQL\Types\UpdateResponseType::build())
        ->argument("receptors", \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument("body", \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument("subject", \GraphQL\Type\Definition\Type::string());

    Graphql::mutation('bulk', [\App\Modules\Notification\Controllers\EmailController::class, 'send'])
        ->type(\App\Modules\Notification\GraphQL\Types\UpdateResponseType::build())
        ->argument("receptors", \GraphQL\Type\Definition\Type::listOf(\GraphQL\Type\Definition\Type::string()))
        ->argument("body", \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument("subject", \GraphQL\Type\Definition\Type::string());
});

Graphql::mutation('activeMessenger', [\App\Modules\Notification\Controllers\MessengerController::class, 'activeMessenger'])
    ->type(\App\Modules\Notification\GraphQL\Types\UpdateResponseType::build())
    ->argument('token', \GraphQL\Type\Definition\Type::string());
