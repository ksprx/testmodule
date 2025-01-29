<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'fa_name',
        'en_name',
        'priority',
        'color_details',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function parentCategories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_relationships', 'child_id', 'parent_id');
    }

    public function childCategories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_relationships', 'parent_id', 'child_id');
    }
}