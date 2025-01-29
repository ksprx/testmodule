<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyValue extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'priority', 'value', 'property_id', 'product_id'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
