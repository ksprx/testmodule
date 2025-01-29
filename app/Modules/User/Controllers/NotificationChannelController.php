<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\User\Models\NotificationChannel;

class NotificationChannelController extends Controller
{


    public function get()
    {
        return NotificationChannel::with("channel_type")->find(1);
    }

    public function all()
    {
        return NotificationChannel::all();
    }

    public function delete($args)
    {
        try {
            $get = NotificationChannel::find($args['id']);
            if ($get) {
                $get->delete();
                return [
                    "status" => true,
                    "message" => 'success'
                ];
            }
            return [
                "status" => false,
                "message" => 'not_found'
            ];

        } catch (\Exception $exception) {
            return [
                "status" => false,
                "message" => $exception->getMessage()
            ];

        }
    }

    public function create($args)
    {
        try {
            NotificationChannel::create([
                'user_id' => 1,
                'channel_type_id' => $args["channel_type_id"],
                'channel_value' => $args["channel_value"],
                'metadata' => null,
                'is_active' => true,
            ]);
            return [
                "status" => true,
                "message" => 'success'
            ];
        } catch (\Exception $exception) {
            return [
                "status" => false,
                "message" => $exception->getMessage()
            ];
        }
    }

    public function update($args)
    {
        $channel = NotificationChannel::find(1);

        if (!$channel) {
            return [
                "status" => false,
                "message" => 'not_found'
            ];
        }

        $channel->update($args);
        return [
            "status" => true,
            "message" => 'success'
        ];
    }
}
