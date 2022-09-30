<?php

namespace App\Models;

use App\Models\Order;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];
    protected $guarded =[];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function phone()
    {
        return $this->morphOne(Phone::class,'phoneable');
    }
    public function shops()
    {
        return $this->belongsToMany(Shop::class,'shops_users','user_id','shop_id');
    }

    public function userHasShop()
    {
        return Auth::user()->shops->first() ? Auth::user()->shops->first()->name : null;
    }

    /* Relation client et commande*/
    public function clientOrder()
    {
        return $this->hasMany(Order::class);
    }
    /* Relation client et commande*/
}
