<?php

namespace App\Core\Migration;

use Illuminate\Database\Eloquent\Model;

class Migration extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'migration',
        'batch',
    ];
}