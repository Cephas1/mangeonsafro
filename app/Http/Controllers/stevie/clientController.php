<?php

namespace App\Http\Controllers\stevie;

use DateTime;
use App\Models\User;
use App\Models\Order;
use App\Models\Favori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class clientController extends Controller
{
    public function index($id)
    {
        $clients = User::all();
        $client = $clients->find($id);
        $showOrders = DB::table('Orders')->join('users', 'orders.user_id', '=', 'users.id')->where('users.id', $client->id)->get();
        //Nombre de commande totale
        $nbrOrder = count($showOrders->groupBy('code'));
        //Nombre de commande valider
        $validOrder = count($showOrders->where('order_state', 1)->groupBy('code'));
        //Nombre de commande en attente
        $waitOrder = count($showOrders->where('order_state', 0)->groupBy('code'));
        return view('stevie.backend.client.client-home.client-home', [
            'client' => $client,
            'NbrOrder' => $nbrOrder,
            'validOrder' => $validOrder,
            'waitOrder' => $waitOrder
        ]);
    }

    public function profile($id)
    {
        $clients = User::all();
        $client = $clients->find($id);
        return view('stevie.backend.client.client-profile.client-profile', [
            'client' => $client
        ]);
    }

    public function editProfile($id, Request $request) {
        $client = User::find($id);
        $client->name = $request->input('name');
        $client->first_name = $request->input('first_name');
        $client->email = $request->input('email');
        $client->gender = $request->input('gender');
        $time =  $request->input('birthday');
        $date = DateTime::createFromFormat('d/m/Y', $time);
        $date = $date->format('Y-m-d');
        $client->birthday = $date;
        $client->phone = $request->input('phone');
        $client->address = $request->input('address');
        $client->ville = $request->input('ville');
        $client->pays = $request->input('pays');
        $client->update();
        return redirect()->back();
    }

    //Liste des favoris
    public function favoris($id, Request $request)
    {
        $clients = User::all();
        $client = $clients->find($id);

        //Debut recherche
        $search = $request['search'] ?? "";
        if($search !=""){
            $fav = db::table('favoris')
            ->join('users', 'favoris.user_id', '=', 'users.id')
            ->join('products', 'favoris.favorisable_id', '=', 'products.id')
            ->where('users.id', $client->id)
            ->where('favoris.favorisable_type', 'Product')->where('products.name','LIKE',"%$search%")->get();
        }else{
            $fav = db::table('favoris')
            ->join('users', 'favoris.user_id', '=', 'users.id')
            ->join('products', 'favoris.favorisable_id', '=', 'products.id')
            ->where('users.id', $client->id)
            ->where('favoris.favorisable_type', 'Product')->get();
        }
        //Fin recherche

        return view('stevie.backend.client.client-mes-produits-preferes.client-mes-produits-preferes', [
            'client' => $client,
            'favoris' => $fav,
            'search' => $search,
        ]);
    }

    //Supprimer un produit favoris

    public function showDeleteFavoris($id){
        $output='<form action="'.route('client-delete-favoris',$id).'" class="row" method="post">
        '. method_field('delete').
         csrf_field() .'
        <div class="col-6" >
            <button class="btn btn-primary continue-btn" style="width: 212px">Oui</button>
        </div>
        <div class="col-6">
            <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Non</a>
        </div>
    </form>';
        return response()->json($output);
    }

    public function deleteFavoris ($id){

        db::delete('delete from favoris where id = ?',[$id]);
        return redirect()->back();
    }

    public function commande($id)
    {
        $clients = User::all();
        $client = $clients->find($id);
        $listOrders = DB::table('orders')->select(db::raw('code, user_id ,sum(price * quantity) total, order_state, created_at'))->where('user_id', $client->id)->groupBy(['code', 'order_state', 'created_at', 'user_id'])->orderBy('code')->get();
        $waitingOrder = count(DB::select('SELECT distinct code, order_state, created_at from orders' . ' where order_state = 0 and user_id=' . $id));
        $successOrder = count(DB::select('SELECT distinct code, order_state, created_at from orders' . ' where order_state = 1 and user_id=' . $id));
        $totals = db::select('SELECT sum(price * quantity) total from orders');
        return view('stevie.backend.client.client-mes-commandes.client-mes-commandes', [
            'client' => $client,
            'Orders' => $listOrders,
            'waitingOrder' => $waitingOrder,
            'successOrder' => $successOrder

        ]);
    }

    public function detailOrder($code)
    {

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
}
