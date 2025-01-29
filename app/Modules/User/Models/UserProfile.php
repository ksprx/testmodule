<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'birth_date',
        'alternative_phone_number',
        'landline_phone',
        'postal_code',
        'province',
        'city',
        'address',
        'profile_image',
        'national_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
