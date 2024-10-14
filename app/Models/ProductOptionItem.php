<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOptionItem extends Model
{
    use HasFactory;

    public function product_option()
    {
        return $this->belongsTo(ProductOption::class);
    }
}
