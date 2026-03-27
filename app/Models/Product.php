<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\ProductImage;
use App\Models\Category;

class Product extends Model
{   
    protected $fillable = [
        'name',
        'description',
        'category_id'
    ];

    public function product_image(): HasOne
    {
        return $this->hasOne(ProductImage::class, 'product_id');
    }

    public function category(): HasOne 
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function product_images(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
}
