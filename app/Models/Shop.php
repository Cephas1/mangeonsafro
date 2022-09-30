<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function phone()
    {
        return $this->morphOne(Phone::class, 'phoneable');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function categorieShop()
    {
        return $this->belongsTo(CategorieShop::class);
    }
}
