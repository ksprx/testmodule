<?php

namespace App\Modules\Product\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'fa_name', 'en_name'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}