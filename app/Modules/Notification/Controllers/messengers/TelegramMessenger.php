<?php

namespace App\Modules\Notification\Controllers\messengers;

use App\Modules\Notification\Controllers\messengers\telegram\api;
use App\Modules\User\Models\NotificationChannel;

class TelegramMessenger extends MessengerTempelete
{
    protected const  API_KEY = "6628614532:AAEyM3v_FAdVdrYS5E-oQdcUYZMJtRhrEjI";
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

    public static function getInstance(): TelegramMessenger
    {
        if (self::$instance == null) {
            self::$instance = new self();
            self::$instance::getApp();
        }
        return self::$instance;
    }


    public function sendMessage($receptor, $text, $send_now = false): array
    {
        $action = self::getApp()->sendMessage([
            "chat_id" => 858989835,
            "text" => "hi mohamad"
        ]);
        if ($action["ok"]) {
            return ["status" => true, "message" => "پیام ارسال شد"];
        }
        return ["status" => false, "message" => "پیام ارسال نشد"];
    }

    public function webhook(): array
    {
        $channel = NotificationChannel::where('channel_type_id', self::CHANNEL_ID)
            ->where('channel_value', self::getApp()->ChatID());
        if (!$channel) {
            $token = $this->getToken(self::getApp()->ChatID());

            self::getApp()->sendMessage([
                "text" => "برای استفاده از کالا بازار در پیام رسان تلگرام ، ابتدا حساب خود را با استفاده از دکمه زیر به کالا بازار متصل کنید.",
                "chat_id" => self::getApp()->ChatID(),
                "reply_markup" => json_encode([
                    "inline_keyboard" => [
                        [
                            [
                                "text" => "✅ فعال سازی",
                                "url" => "https://kalabazar.com/api/messengers/active.php?token="
                                    . $token,
                            ],
                        ],
                    ],
                ]),
            ]);
        } else {
            self::getApp()->sendMessage([
                "text" => self::getApp()->Text(),
                "chat_id" => self::getApp()->ChatID()
            ]);

        }
        return ["status" => true, "message" => "وب هوک دریافت شد"];
    }

}
