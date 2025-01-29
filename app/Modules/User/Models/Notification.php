<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use SoftDeletes;

    protected $table = 'notifications';

    protected $fillable = [
        'user_id',
        'channel_id',
        'message',
        'message_type',
        'attachments',
        'status',
    ];

    protected $casts = [
        'attachments' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function channel()
    {
        return $this->belongsTo(NotificationChannel::class, 'channel_id');
    }
}
