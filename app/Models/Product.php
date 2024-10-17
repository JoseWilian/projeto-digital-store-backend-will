<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = [
    ];

    public function cart_items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function product_options()
    {
        return $this->hasMany(ProductOption::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
