<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];


    /* Relation commande et client*/
    public function orderClient()
    {
        return $this->belongsTo(User::class);
    }
    /* Relation commande et client*/
}
