<?php

namespace App\Http\Controllers;

use App\Models\CategorieShop;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
   public function index()
   {
        $shop_restaurant = CategorieShop::where('name', 'restaurant')->first()->shop()->get();
        $shop_faitMaison = CategorieShop::where('name', 'fait maison')->first()->shop()->get();
        $shop_traiteur = CategorieShop::where('name', 'traiteur')->first()->shop()->get();
        $shop_epicerie = CategorieShop::where('name', 'epicerie')->first()->shop()->get();
        return view('backend.home.dashboard',[
            'shop_restaurant'=>count($shop_restaurant),
            'shop_faitMaison'=>count($shop_faitMaison),
            'shop_traiteur'=>count($shop_traiteur),
            'shop_epicerie'=>count($shop_epicerie)
        ]);
   }

   public function storeRole(Request $request)
   {
       dd($request->all());
       return back();
   }
}
