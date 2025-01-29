<?php

namespace App\Modules\Notification\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Notification\Controllers\messengers\TelegramMessenger;
use App\Modules\Notification\Models\NotificationAccessToken;
use App\Modules\User\Models\NotificationChannel;

class MessengerController extends Controller
{

    const SOROUSH_API_KEY = "123";

    const MESSENGER_ID = [
        "notification" => 1,
        "sms" => 2,
        "email" => 3,
        "telegram" => 4,
        "whatsapp" => 5,
        "instagram" => 6,
        "igap" => 7,
        "eitaa" => 8,
        "bale" => 9,
        "soroush" => 10,
        "gap" => 11,
    ];

    public function active($token)
    {
        $accessToken = NotificationAccessToken::with('channelType')->where('token', $token)->first();
        if (!$accessToken) {
            return [
                "status" => false,
                "message" => "لینک شما منقضی شده است"
            ];
        }
        $active = $accessToken->channelType->active;
        $channelValue = $accessToken->channel_value;
        $channelTypeId = $accessToken->channel_type_id;

        if ($active) {
            NotificationChannel::updateOrCreate(['user_id' => 1, 'channel_type_id' => $channelTypeId], [
                'user_id' => 1,
                'channel_type_id' => $channelTypeId,
                'active' => true,
                'channel_value' => $channelValue
            ]);
            switch ($channelTypeId) {

                case 6:
                    TelegramMessenger::getInstance()->sendMessage($channelValue, "حساب شما در کالا بازار به پیامرسان تلگرام متصل شد");
                    break;

            }
            return [
                "status" => TRUE,
                "message" => "کانال اطلاع رسانی فعال شد"
            ];
        }
        return [
            "status" => false,
            "message" => "کانال اطلاع رسانی از منبع غیر فعال است و امکان فعال سازی این کانال وجود ندارد"
        ];
    }
}
