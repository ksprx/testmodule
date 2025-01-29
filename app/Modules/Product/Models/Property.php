<?php

namespace App\Modules\Product\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'fa_name', 'en_name', 'is_searchable', 'is_variable', 'priority', 'type_id', 'box_id'
    ];

    public function type()
    {
        return $this->belongsTo(PropertyType::class, 'type_id');
    }

    public function box()
    {
        return $this->belongsTo(Box::class);
    }

    public function values()
    {
        return $this->hasMany(PropertyValue::class);
    }
}