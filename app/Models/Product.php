<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function vote()
    {
        return $this->hasMany(Vote::class, 'votesable_id');
    }

    public function categories()
    {
        return $this->belongsToMany(CategorieProduct::class,'categories_has_products','product_id','categorie_product_id');
    }
}
