<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'image',
        'category_id',
        'is_active',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($product) {
            if (empty($product->slug)) {
                $product->slug = \Illuminate\Support\Str::slug($product->name);
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
