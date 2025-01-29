<?php

namespace App\Modules\Notification\Controllers\messengers;

use App\Modules\Notification\Controllers\messengers\igap\api;
use App\Modules\User\Models\NotificationChannel;
use Proto\ChatSendMessage;
use Proto\RoomMessageType;

class IgapMessenger extends MessengerTempelete
{
    protected const  API_KEY = "62a12461-4ee8-464d-80ed-deeeb49a043f";
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

    public static function getInstance(): IgapMessenger
    {
        if (self::$instance == null) {
            self::$instance = new self();
            self::$instance::getApp();
        }
        return self::$instance;
    }

    public function sendMessage($receptor, $text, $send_now = false): array
    {
        $message = new ChatSendMessage();

        $message->setMessage($text);
        $message->setMessageType(RoomMessageType::TEXT);
        $message->setAdditionalType(2);
        $data = $message->serializeToString();
        $action = self::getApp()->request(201, $data);
        if ($action["ok"]) {
            return ["status" => true, "message" => "پیام ارسال شد"];
        }
        return ["status" => false, "message" => "پیام ارسال نشد"];
    }

    public function webhook(): array
    {
        $data = new \Proto\ChatSendMessageResponse();
        $data->mergeFromString(file_get_contents('php://input'));
        $channel = NotificationChannel::where('channel_type_id', self::CHANNEL_ID)
            ->where('channel_value', $data->getRoomId());
        if (!$channel) {
            $token = $this->getToken($data->getRoomId());

            $message = new ChatSendMessage();

            $message->setRoomId($data->getRoomId());
            $message->setMessage('برای استفاده از کالا بازار در پیام رسان ای گپ ، ابتدا حساب خود را با استفاده از دکمه زیر به کالا بازار متصل کنید.');
            $message->setMessageType(RoomMessageType::TEXT);
            $message->setAdditionalType(2);
            $additionalData = [
                [
                    [
                        'actionType' => 4,
                        'label' => '✅ فعال سازی',
                        'value' => "https://kalabazar.com/api/messengers/active.php?token=" . $token,
                        'imageUrl' => '',
                    ],
                ],
            ];
            $message->setAdditionalData(json_encode($additionalData));
            $data = $message->serializeToString();
            self::getApp()->request(201, $data);
        } else {
            self::getInstance()->sendMessage($data->getRoomId(), $data->getRoomMessage()->getMessage());

        }
        return ["status" => true, "message" => "وب هوک دریافت شد"];
    }

}
