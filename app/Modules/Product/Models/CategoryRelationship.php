<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryRelationship extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'parent_id', 'child_id', 'priority', 'nick_name'
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function child()
    {
        return $this->belongsTo(Category::class, 'child_id');
    }
}