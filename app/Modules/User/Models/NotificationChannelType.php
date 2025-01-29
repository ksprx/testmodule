<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class NotificationChannelType extends Model
{
    protected $fillable = [
        'name',
        'id',
    ];

    public function notificationChannels()
    {
        return $this->hasMany(NotificationChannel::class, 'channel_type_id');
    }
}
