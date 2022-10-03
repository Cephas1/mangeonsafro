<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    public function __invoke()
    {
        if (Role::count() == 0) {
            app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
            Role::create(['name' => 'super-admin']);
            Role::create(['name' => 'admin']);
            Role::create(['name' => 'client']);
            //Role::create(['name' => 'livreur']);
            //Role::create(['name' => 'responsable-commerce']);
            Role::create(['name' => 'vendeur']);
        }

        $products = Product::all()->load('shop', 'categories')->groupBy('shop_id')->reverse();

        $fewList = Product::take(15)->get()->reverse();

        //dd($fewList);
        return view('stevie.frontend.home.home', [
                    'products' => $products, 'lists' => $fewList
        ]);
    }

    public function search(Request $request){
        $products = Product::query();
        if($request->term){
            $products->where('name', 'like', '%'.$request->term.'%')->load('shop', 'categories')->groupBy('shop_id')->reverse();
        }

        return view('stevie.frontend.home.home', [
            'products' => $products ]);
    }
}
