<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
class NotificationChannel extends Model
{

    protected $fillable = [
        'user_id',
        'channel_value',
        'channel_type_id',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'channel_id');
    }

    public function channel_type()
    {
        return $this->belongsTo(NotificationChannelType::class, 'channel_type_id');
    }
}
