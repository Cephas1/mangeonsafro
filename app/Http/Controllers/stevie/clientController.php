<?php

namespace App\Http\Controllers\stevie;

use DateTime;
use App\Models\User;
use App\Models\Order;
use App\Models\Favori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class clientController extends Controller
{
    public function index()
    {
        $id= Auth::user()->id;
        //dd($test);
        $clients = User::all();
        $client = $clients->find($id);
        $showOrders = DB::table('orders')->join('users', 'orders.user_id', '=', 'users.id')->where('users.id', $client->id)->get();
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

    public function profile()
    {
        $id= Auth::user()->id;
        $clients = User::all();
        $client = $clients->find($id);
        return view('stevie.backend.client.client-profile.client-profile', [
            'client' => $client
        ]);
    }

    public function editProfile(Request $request) {
        $id= Auth::user()->id;
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
        $client->city = $request->input('city');
        $client->country = $request->input('country');
        $client->update();
        return redirect()->back();
    }

    //Liste des favoris
    public function favoris(Request $request)
    {
        $id= Auth::user()->id;
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
        $output='
        <div class="col-6" >
            <a href="'.route('client-delete-favoris',$id).'" class="btn btn-primary continue-btn btn-block">Supprimer</a>
        </div>
        <div class="col-6">
            <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Non</a>
        </div>';
        return response()->json($output);
    }

    public function deleteFavoris ($id){
        //$id_user= Auth::user()->id;
        db::delete('delete from favoris where id = ?',[$id]);
        return redirect()->back();
    }

    public function commande()
    {
        $id= Auth::user()->id;
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
                    <td>' . number_format($detailOrder->price,2) . ' €</td>
                    <td>' . $detailOrder->quantity . '</td>
                    <td>' . number_format ((($detailOrder->price) * ($detailOrder->quantity)),2) . ' €</td>
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
