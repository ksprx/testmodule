<?php

namespace App\Core\Auth\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class FailedLoginAttempt extends Model
{
    protected $fillable = ['user_id', 'ip_address'];

    public static function countRecentAttempts(int $userId, int $minutes = 15): int
    {
        return static::where('user_id', $userId)
            ->where('created_at', '>=', Carbon::now()->subMinutes($minutes))
            ->count();
    }

    public static function clearForUser(int $userId): void
    {
        static::where('user_id', $userId)->delete();
    }
}
