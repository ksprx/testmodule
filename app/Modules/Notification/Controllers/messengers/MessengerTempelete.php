<?php

namespace App\Modules\Notification\Controllers\messengers;

use App\Http\Controllers\Controller;
use App\Modules\Notification\Models\NotificationAccessToken;

abstract class MessengerTempelete extends Controller
{
    protected const   API_KEY = '';
    protected const   CHANNEL_ID = '';
    protected static $app = null;
    protected static $instance = null;

    abstract public static function getInstance();

    abstract protected static function getApp();

    abstract public function sendMessage($receptor, $text, $send_now = false): array;

    abstract public function webhook(): array;

    function getToken($channel_value)
    {
        $token = md5(static::CHANNEL_ID . ":" . $channel_value);
        NotificationAccessToken::firstOrCreate([
            'token' => $token
        ], [
            "channel_value" => $channel_value,
            "channel_type_id" => static::CHANNEL_ID,
        ]);
        return $token;
    }

}