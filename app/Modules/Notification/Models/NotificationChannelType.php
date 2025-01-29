<?php

namespace App\Modules\Notification\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NotificationChannelType extends Model
{
    // نام جدول در دیتابیس
    protected $table = 'notification_channel_types';

    protected $fillable = [
        'name',
        'fa_name',
        'active',
    ];

    public $timestamps = true;

    public function accessTokens(): HasMany
    {
        return $this->hasMany(NotificationAccessToken::class, 'channel_type_id');
    }
}