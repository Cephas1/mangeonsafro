<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories_has_products extends Model
{
    use HasFactory;

    protected $fillable = ['categorie_product_id', 'product_id'];

    public function products()
    {
        return $this->belongsToMany(CategorieProduct::class,'categories_has_products','product_id','categorie_product_id');
    }

}
