<?php

namespace App\Http\Controllers\stevie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class headerController extends Controller
{
    static function nbrFavoris(){
        $nbr_fav = 0;
        if(Auth::user()){
            $id_user = Auth::user()->id;
            $fav = DB::table('favoris')->select(db::raw('products.id,products.name,products.price'))
            ->join('users', 'favoris.user_id', '=', 'users.id')
            ->join('products', 'favoris.favorisable_id', '=', 'products.id')
            ->where('users.id', $id_user)
            ->where('favoris.favorisable_type', 'Product')->get();
            $nbr_fav = count($fav);
            //dd($fav);
            return $nbr_fav;
        }else{
            return $nbr_fav;
        }
    }
    static function nbrBaskets(){
        $nbr_basket = 0;
        if(Auth::user()){
            $id_user = Auth::user()->id;
            $basket = DB::table('baskets')->select(db::raw('products.name,products.price,baskets.quantity, sum(products.price * baskets.quantity) as total'))
            ->join('products', 'baskets.product_id', '=', 'products.id')
            ->where('user_id', $id_user)
            ->groupBy('products.name','products.price','baskets.quantity')->get();
            $nbr_basket = count($basket);
            //dd($fav);
            return $nbr_basket;
        }else{
            return $nbr_basket;
        }
    }
}
