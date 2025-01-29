<?php

namespace App\Modules\Product\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'fa_name', 'en_name', 'hex', 'priority'
    ];

    protected $casts = [
        'priority' => 'integer',
    ];
}