<?php

namespace App\Modules\Notification\Controllers\messengers;

use App\Modules\Notification\Controllers\messengers\gap\api;
use App\Modules\User\Models\NotificationChannel;

class GapMessenger extends MessengerTempelete
{
    protected const  API_KEY = "164e9b1ec547d1de75373658d1a42fbc424729e450cd8b499aafaf0ff2e08fe7";
    protected static $app = null;
    protected const   CHANNEL_ID = 6;
    protected static $instance = null;

    protected static function getApp(): api
    {
        if (self::$app == null) {
            self::$app = new api(self::API_KEY);
        }
        return self::$app;
    }

    public static function getInstance(): GapMessenger
    {
        if (self::$instance == null) {
            self::$instance = new self();
            self::$instance::getApp();
        }
        return self::$instance;
    }

    public function sendMessage($receptor, $text, $send_now = false): array
    {
        $action = self::getApp()->sendText($receptor, $text);
        if ($action["ok"]) {
            return ["status" => true, "message" => "پیام ارسال شد"];
        }
        return ["status" => false, "message" => "پیام ارسال نشد"];
    }

    public function webhook(): array
    {
        $chat_id = @$_REQUEST["chat_id"];
        $from = @$_REQUEST["from"];
        $type = @$_REQUEST["type"];
        $data = @$_REQUEST["data"];
        $channel = NotificationChannel::where('channel_type_id', self::CHANNEL_ID)
            ->where('channel_value', $chat_id);
        if (!$channel) {
            $token = $this->getToken($chat_id);
            $action = self::getApp()->sendText($chat_id, "برای استفاده از کالا بازار در پیام رسان تلگرام ، ابتدا حساب خود را با استفاده از دکمه زیر به کالا بازار متصل کنید.", null, $inline_keyboard = [

                [
                    [
                        'text' => '✅ فعال سازی',
                        'url' => "https://kalabazar.com/api/messengers/active.php?token=" . $token,
                    ],
                ],
            ]);

        } else {
            self::getInstance()->sendMessage($chat_id, $data);

        }
        return ["status" => true, "message" => "وب هوک دریافت شد"];
    }

}
