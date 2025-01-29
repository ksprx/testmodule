<?php

namespace App\Modules\Notification\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NotificationAccessToken extends Model
{
    protected $table = 'notification_access_token';

    protected $fillable = [
        'channel_type_id',
        'token',
        'channel_value',
    ];

    public $timestamps = true;

    public function channelType(): BelongsTo
    {
        return $this->belongsTo(NotificationChannelType::class, 'channel_type_id');
    }
}