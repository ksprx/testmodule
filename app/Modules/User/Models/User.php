<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'phone_number',
        'email',
        'username',
        'first_name',
        'last_name',
    ];
    protected $hidden = [
        'password',
    ];

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }
    public function notificationChannels()
    {
        return $this->hasMany(NotificationChannel::class, 'user_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'user_id');
    }
}
