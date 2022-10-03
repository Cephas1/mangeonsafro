<?php

namespace App\Http\Controllers\stevie;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class basketController extends Controller
{
    public function showBasket(){
        if(Auth::user()){
            $id_user = Auth::user()->id;
            $basket = DB::table('baskets')->select(db::raw('products.name,products.price,baskets.quantity,
            sum(products.price * baskets.quantity) as total, baskets.id id_item'))
            ->join('products', 'baskets.product_id', '=', 'products.id')
            ->where('user_id', $id_user)
            ->groupBy('products.name','products.price','baskets.quantity','baskets.id')->get();
            $total_basket = DB::table('baskets')->select(db::raw('sum(products.price * baskets.quantity) as total'))
            ->join('products', 'baskets.product_id', '=', 'products.id')
            ->where('user_id', $id_user)
            ->groupBy('user_id')->get();
            $nbr_basket = count($basket);
            return view('stevie.frontend.shopping-cart.shopping-cart',[
                'basket'=>$basket,
                'Order_total'=>$total_basket
            ]);
        }else{
            return view('stevie.frontend.shopping-cart.shopping-cart');
        }
    }

    public function addBasket(Request $request){
        if(Auth::user()){
            $check= Basket::where('user_id',Auth::user()->id)->where('product_id',$request->input('product_id'))->exists();
            if($check){
                return redirect()->back()->with('message','Produit déjà disponible dans votre panier');
            }else{
                $basket = new Basket();
                $basket->user_id = Auth::user()->id;
                $basket->shop_id = $request->input('shop_id');
                $basket->product_id = $request->input('product_id');
                $basket->price = $request->input('price');
                $basket->quantity = $request->input('quantity');
                $basket->save();
                return redirect()->back()->with('message','Produit a été ajouter à votre panier');
            }
        }else{
            return redirect(route('login'));
        }
    }

    public function delItemBasket($id_item){
        db::delete('delete from baskets where id = ?',[$id_item]);
        return redirect()->back()->with('message','Produit retirer !');
    }

    public function editItemBasket(){

    }

    public function refreshBasket(){
        return redirect()->back();
    }


    public function addToOrder(){
        $code=time();
        $baskets = Basket::where('user_id',Auth::id())->get();
        foreach($baskets as $basket){
            $order = new Order();
            $order->code = $code;
            $order->user_id = Auth::id();
            $order->shop_id = $basket->shop_id;
            $order->product_id = $basket->product_id;
            $order->price = $basket->price;
            $order->quantity = $basket->quantity;
            $order->order_state = 0;
            $order->transaction_state = 1;
            $order->save();
        }
        db::delete('delete from baskets where user_id = ?',[Auth::id()]);
        return redirect()->back()->with('message','Commande effectuer');
    }
}
