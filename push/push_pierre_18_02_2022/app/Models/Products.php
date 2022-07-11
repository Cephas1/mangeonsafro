<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(ImageProduct::class);
    }

    public function categories()
    {
        return $this->belongsToMany(CategorieProduct::class, 'categories_has_products','product_id','categorie_product_id');
    }

    // public function categoriesHasProducts()
    // {
    //     return $this->belongsToMany(Categories_has_products::class);
    // }
}
