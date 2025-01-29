<?php

namespace App\Modules\Notification;

use App\Core\Facades\Router;
use App\Http\Providers\ServiceProvider;
use App\Modules\Notification\Controllers\MessengerController;
use App\Modules\Notification\Controllers\messengers\BaleMessenger;
use App\Modules\Notification\Controllers\messengers\GapMessenger;
use App\Modules\Notification\Controllers\messengers\IgapMessenger;
use App\Modules\Notification\Controllers\messengers\TelegramMessenger;


class NotificationServiceProvider extends ServiceProvider
{
    public function register()
    {
        Router::group(["prefix" => "/webhook"], function () {
            Router::get('/telegram', [TelegramMessenger::class, 'webhook']);
            Router::get('/bale', [BaleMessenger::class, 'webhook']);
            Router::get('/gap', [GapMessenger::class, 'webhook']);
            Router::get('/igap', [IgapMessenger::class, 'webhook']);
        });
        Router::group(["prefix" => "/messenger"], function () {
            Router::get('/active/{token}', [MessengerController::class, 'active']);
        });
    }

    public function boot()
    {
    }
}
