<?php

namespace App\Http\Controllers;

use App\Models\CategorieShop;
use App\Models\Order;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
   public function index()
   {
        /*$shop_restaurant = CategorieShop::where('name', 'restaurant')->first()->shop()->get();
        $shop_faitMaison = CategorieShop::where('name', 'fait maison')->first()->shop()->get();
        $shop_traiteur = CategorieShop::where('name', 'traiteur')->first()->shop()->get();
        $shop_epicerie = CategorieShop::where('name', 'epicerie')->first()->shop()->get();
        return view('backend.home.dashboard',[
            'shop_restaurant'=>count($shop_restaurant),
            'shop_faitMaison'=>count($shop_faitMaison),
            'shop_traiteur'=>count($shop_traiteur),
            'shop_epicerie'=>count($shop_epicerie)
        ]);*/

        $a = Shop::all()->load('categorieShop')->groupBy('categorie_shop_id');
        $countCatShops = [];
        foreach ($a as $key => $value) {
            $countCatShops[] = [$key, $value['0']->categorieShop->name];
        }
        //Fin de la recuperation du nombre de categoriesde commerce plus

        //$order = Order::select('orders.id as id', 'orders.code as code', 'products.name as product',
        //                              'products.price as product_price')
        //                     ->join('products', 'products.id', '=', 'orders.product_id')
        //                     ->sum(DB::raw('products.price * orders.quantity'));
        $order = Order::all()->load('user', 'shop', 'product');
        $shopsOrders = Order::all()->load('shop')->groupBy('shop_id');
        $shopsCA = [];
        $sName = "";
        $sNumber = "";
        $sImage = "";
        $orderCount = 0;
        $listShopsInfos = [];

        foreach ($shopsOrders as $key => $value) {
           $sName = $value['0']->shop->name;
           $sNumber = $value['0']->shop->phone;
           $orderAmount = 0;
           $orderCount = count($value);

           foreach ($value as $key1 => $value1) {
            $orderAmount += $value1->price;
           }
           $shopCA = [
            "shop_name" => $sName,
            "shop_phone" => $sNumber,
            "shop_orders_count" => $orderCount,
            "shop_CA" => $orderAmount
           ];
            $listShopsInfos[] = $shopCA;
           //echo($sName."--->".$orderCount."--->".$orderAmount."\n");
        }
        //dd($listShopsInfos);

        //dd($order);


        return view('stevie.backend.admin.admin-home.admin-home',
                    ['countCatShops' => $countCatShops,
                     'listShopsInfos' => $listShopsInfos]);
   }

   public function storeRole(Request $request)
   {
       dd($request->all());
       return back();
   }
}
