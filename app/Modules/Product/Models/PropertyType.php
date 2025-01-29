<?php

namespace App\Modules\Product\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyType extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'fa_name', 'en_name', 'type', 'is_searchable'
    ];

    public function properties()
    {
        return $this->hasMany(Property::class, 'type_id');
    }
}