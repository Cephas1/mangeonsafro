<?php

namespace App\Http\Controllers\stevie;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Shop;

class vendeurController extends Controller
{
    public function index($id){

        $vendeurs = User::all();
        $vendeur = $vendeurs->find($id);
        $showOrders = DB::table('orders')->join('shops','orders.shop_id','=','shops.id')
        ->join('shops_users','shops.id','=','shops_users.shop_id')
        ->join('users','shops_users.user_id','=','users.id')
        ->where('users.id',$vendeur->id)->get() ;
        //Nombre de commande totale
        $nbrOrder = count($showOrders->groupBy('code'));
        //Nombre de commande valider
        $validOrder = count($showOrders->where('order_state', 1)->groupBy('code'));
        //Nombre de commande en attente
        $waitOrder = count($showOrders->where('order_state', 0)->groupBy('code'));
        return view('stevie.backend.vendeur.vendeur-home.vendeur-home', [
            'vendeur' => $vendeur,
            'NbrOrder' => $nbrOrder,
            'validOrder' => $validOrder,
            'waitOrder' => $waitOrder
        ]);
    }

    public function commande($id, Request $request){
        $vendeurs = User::all();
        $clients = User::all();
        $vendeur = $vendeurs->find($id);

        //Debut recherche
        $search = $request['search']??"";
        if($search !=""){
        $listOrders = DB::table('orders')->select(db::raw('orders.code, orders.user_id ,sum(orders.price * orders.quantity) total, orders.order_state, orders.created_at'))
        ->join('shops','orders.shop_id','=','shops.id')
        ->join('shops_users','shops.id','=','shops_users.shop_id')
        ->join('users','shops_users.user_id','=','users.id')
        ->where('users.id',$vendeur->id)->groupBy(['orders.code', 'orders.order_state', 'orders.created_at', 'orders.user_id'])->orderBy('code')->having('orders.code','LIKE',"%$search%")->get();
        }else{
        $listOrders = DB::table('orders')->select(db::raw('orders.code, orders.user_id ,sum(orders.price * orders.quantity) total, orders.order_state, orders.created_at'))
        ->join('shops','orders.shop_id','=','shops.id')
        ->join('shops_users','shops.id','=','shops_users.shop_id')
        ->join('users','shops_users.user_id','=','users.id')
        ->where('users.id',$vendeur->id)->groupBy(['orders.code', 'orders.order_state', 'orders.created_at', 'orders.user_id'])->orderBy('code')->get();
        }
        //Fin recherche

        $showOrders = DB::table('orders')->join('shops','orders.shop_id','=','shops.id')
        ->join('shops_users','shops.id','=','shops_users.shop_id')
        ->join('users','shops_users.user_id','=','users.id')
        ->where('users.id',$vendeur->id)->get() ;

        //Nombre de commande totale
        $nbrOrder = count($showOrders->groupBy('code'));
        //Nombre de commande valider
        $validOrder = count($showOrders->where('order_state', 1)->groupBy('code'));
        //Nombre de commande en attente
        $waitOrder = count($showOrders->where('order_state', 0)->groupBy('code'));
        return view('stevie.backend.vendeur.vendeur-mes-commandes.vendeur-mes-commandes', [
            'clients'=> $clients,
            'vendeur' => $vendeur,
            'NbrOrder' => $nbrOrder,
            'Orders' => $listOrders,
            'validOrder' => $validOrder,
            'waitOrder' => $waitOrder
        ]);
    }

    public function detailsCommande($code){
        $outputs = "";

        $output = "";
        $detailOrders= db::table('orders')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->where('orders.code', $code)->get();
        foreach ($detailOrders as $detailOrder) {
            $output .= '
                <tr>
                    <td>
                        <h2 class="table-avatar">
                            <a href="javascript:void(0);" class="avatar"><img src="' . asset('assets-back/img/products/image-14.png') . '" alt=""></a>
                            <a href="javascript:void(0);">' . $detailOrder->name . '<span></span></a>
                        </h2>
                    </td>
                    <td>' . $detailOrder->price . ' €</td>
                    <td>' . $detailOrder->quantity . '</td>
                    <td>' . ($detailOrder->price) * ($detailOrder->quantity) . ' €</td>
                </tr>';
        };

        $outputs = '
        <table class="table table-striped custom-table" id="list-order">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix produit</th>
                    <th>Quantité</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>' . $output .
            '</tbody>
        </table>
        ';


        return response()->json($outputs);
    }

    public function showChangeState($code){

        $output ='<form action="'.route('orderLivred',$code).'" class="row" method="post">';
        return response()->json($output);
    }

    public function orderLivred($code, Request $request ){
        $Order = Order::find($code);
        $Order->order_state =$request->input('livred');
        $Order->update();
        return redirect()->back();
    }
}
