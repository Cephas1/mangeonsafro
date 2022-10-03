<?php

namespace App\Http\Controllers\stevie;

use DateTime;
use App\Models\Shop;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\CategorieShop;
use App\Models\CategorieProduct;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class vendeurController extends Controller
{
    public function index(){
        $id= Auth::user()->id;
        $vendeurs = User::all();
        $vendeur = $vendeurs->find($id);
        $showOrders = DB::table('orders')->join('shops','orders.shop_id','=','shops.id')
        ->join('users','shops.user_id','=','users.id')
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

    public function commande(Request $request){
        $id= Auth::user()->id;
        $vendeurs = User::all();
        $clients = User::all();
        $vendeur = $vendeurs->find($id);

        //Debut recherche
        $search = $request['search']??"";
        if($search !=""){
        $listOrders = DB::table('orders')->select(db::raw('orders.code, orders.user_id ,sum(orders.price * orders.quantity) total, orders.order_state, orders.created_at'))
        ->join('shops','orders.shop_id','=','shops.id')
        ->join('users','shops.user_id','=','users.id')
        ->where('users.id',$vendeur->id)->groupBy(['orders.code', 'orders.order_state', 'orders.created_at', 'orders.user_id'])->orderBy('code')->having('orders.code','LIKE',"%$search%")->get();
        }else{
        $listOrders = DB::table('orders')->select(db::raw('orders.code, orders.user_id ,sum(orders.price * orders.quantity) total, orders.order_state, orders.created_at'))
        ->join('shops','orders.shop_id','=','shops.id')
        ->join('users','shops.user_id','=','users.id')
        ->where('users.id',$vendeur->id)->groupBy(['orders.code', 'orders.order_state', 'orders.created_at', 'orders.user_id'])->orderBy('code')->get();
        }
        //Fin recherche

        $showOrders = DB::table('orders')->join('shops','orders.shop_id','=','shops.id')
        ->join('users','shops.user_id','=','users.id')
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

        $output ='
        <div class="col-6" >
            <a href="'.route('orderLivred',$code).'" class="btn btn-primary continue-btn">Oui</a>
        </div>
        <div class="col-6">
            <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Non</a>
        </div>';
        return response()->json($output);
    }

    public function orderLivred($code ){
        //$id_user= Auth::user()->id;
        $state= db::table('orders')->where('code',$code)
        ->update(['order_state'=>1]);
        return redirect()->back();
    }

    public function showProduct(Request $request){
        $id= Auth::user()->id;
        $vendeurs = User::all();
        $vendeur = $vendeurs->find($id);
        $categories = CategorieProduct::all()->where('user_id',$vendeur->id);
        $search = $request['search'] ??"";
        if($search !=""){
            $products = db::table('products')->select(db::raw('products.name,products.description,products.price,products.active,products.shop_id,products.id,categorie_products.name categorie_name'))
            ->join('shops','products.shop_id','=','shops.id')
            ->join('users','shops.user_id','=','users.id')
            ->join('categorie_products','products.categorie_id','=','categorie_products.id')
            ->where('users.id','=',$id)
            ->where('products.name','LIKE',"%$search%")->get();
        }else{
            $products = db::table('products')->select(db::raw('products.name,products.description,products.price,products.active,products.shop_id,products.id,categorie_products.name categorie_name'))
            ->join('shops','products.shop_id','=','shops.id')
            ->join('users','shops.user_id','=','users.id')
            ->join('categorie_products','products.categorie_id','=','categorie_products.id')
            ->where('users.id','=',$id)->get();
        }

        //dd($products);
        return view('stevie.backend.vendeur.vendeur-mes-produits.vendeur-mes-produits',[
            'categories'=> $categories,
            'vendeur'=> $vendeur,
           'products'=>$products,
        ]);
    }

    public function addProduct(Request $request){
        $id= Auth::user()->id;
        $id_shop= shop::all()->where('user_id',$id);
        foreach($id_shop as $id_shop){
            $shop_id = $id_shop->id;
        };
        $products = new Product();
        /*if($request->hasFile('image')){
            $file = $request->file(('image'));
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets-back/img/products',$filename);
            $products->image = $filename;
        }*/
        $products->name = $request->input('name');
        $products->price = $request->input('price');
        $products->description = $request->input('description');
        $products->categorie_id= $request->input('categorie');
        $products->active = 1;
        $products->shop_id = $shop_id;
        $products->save();
        return redirect()->back();
    }

    public function showEditProduct($id){
        $id_user= Auth::user()->id;
        $product = Product::find($id);
        $categories ="";
        $categorie = CategorieProduct::all()->where('user_id',$id_user);
        foreach ($categorie as $cat ){ $categories.='<option value="'.$cat->id.'">'.$cat->name.'</option>';}
        $output='
        <div class="form-group">
        <input class="d-none" name="id_product" type="text" value="'.$product->id.'">
            <label>Nom produit <span class="text-danger">*</span></label>
            <div >
                <input class="form-control" name="name" type="text" value="'.$product->name.'" required>
            </div>
        </div>
        <div class="form-group">
            <label>Prix produit <span class="text-danger">*</span></label>
            <div >
                <input class="form-control" name="price" type="text" value="'.$product->price.'" required>
            </div>
        </div>
        <div class="form-group">
                                <label>Categorie</label>
                                <select class="form-control" name="categorie">
                                    '.$categories.'
                                </select>
                            </div>
        <div class="form-group">
            <label>Image <span class="text-danger">*</span></label>
            <div class="">
                <input class="form-control" name="image" type="file">
            </div>
        </div>
        <div class="form-group">
            <label>Description<span class="text-danger">*</span></label>
            <textarea rows="4" class="form-control" name="description" required>'.$product->description.'</textarea>
        </div>
        ';

        return response()->json($output);
    }

    public function editProduct(Request $request){
        $id_product = $request->input('id_product');
        $products = Product::find($id_product);
        /*if($request->hasFile('image')){
            $file = $request->file(('image'));
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets-back/img/products',$filename);
            $products->image = $filename;
        }*/
        $products->name = $request->input('name');
        $products->price = $request->input('price');
        $products->categorie_id= $request->input('categorie');
        $products->description = $request->input('description');
        $products->update();
        return redirect()->back();
    }

    public function isActivated($id){
        $product = Product::find($id);
        if ($product->active == 1){
            $product->active=0;
            $product->update();
            return redirect()->back()->with('success', 'Produit désactivé avec succès !');
        }else{
            $product->active=1;
            $product->update();
            return redirect()->back()->with('success', 'Produit activé avec succès !');
        }
        return redirect()->back()->with('error', 'Echec !!! Prière de bien vouloir réessayer !');
    }

    public function deleteProductModal($id){

        $output ='
        <div class="col-6" >
            <a href="'.route('vendeur-deleteProduct',$id).'" class="btn btn-primary continue-btn">Supprimer</a>
        </div>
        <div class="col-6">
            <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Non</a>
        </div>';
        return response()->json($output);
    }

    public function deleteProduct($id ){
        //$id_user= Auth::user()->id;
        db::delete('delete from products where id = ?',[$id]);
        return redirect()->back();
    }


    public function shopInfos(){
        $id= Auth::user()->id;
        $vendeurs = User::all();
        $vendeur = $vendeurs->find($id);
        $cat = CategorieShop::all();
        $shop = DB::table('shops')->select(db::raw('shops.name shop_name, shops.description shop_description,shops.web_site, shops.email shop_email, shops.phone shop_phone, users.name user_name, users.first_name user_first_name, categorie_shops.name categorie, shops.created_at date_creation, shops.id id_shop, shops.country shop_country, shops.address shop_address, shops.city shop_city,categorie_shops.id id_cat'))
        ->join('users','shops.user_id','=','users.id')
        ->join('categorie_shops','shops.categorie_shop_id','=','categorie_shops.id')
        ->where('users.id',$vendeur->id)->get();
        //dd($shop);
        return view('stevie.backend.vendeur.vendeur-mes-informations.vendeur-mes-informations',[
            'cat'=> $cat,
            'vendeur'=> $vendeur,
            'shop'=> $shop,
        ]);
    }

    public function editShop(Request $request){

        $id= Auth::user()->id;
        $id_shop = Shop::all()->where('user_id',$id);
        foreach($id_shop as $id_shop){
            $shop_id = $id_shop->id;
        };
        $shop = Shop::find($shop_id);
        /*if($request->hasFile('image')){
            $file = $request->file(('image'));
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets-back/img/products',$filename);
            $products->image = $filename;
        }*/
        $shop->name = $request->input('name');
        $shop->description = $request->input('description');
        $shop->web_site = $request->input('web_site');
        $shop->email = $request->input('email');
        $shop->phone = $request->input('phone');
        $shop->categorie_shop_id = $request->input('categorie_shop_id');
        $shop->address = $request->input('address');
        $shop->city = $request->input('city');
        $shop->country = $request->input('country');
        $shop->categorie_shop_id = $request->input('categorie');
        $shop->update();

        return redirect()->back();
    }

    public function createShop(Request $request){
        $id_vendeur= Auth::user()->id;
        $shop = new Shop();
        /*if($request->hasFile('image')){
            $file = $request->file(('image'));
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets-back/img/products',$filename);
            $products->image = $filename;
        }*/
        $shop->name = $request->input('name');
        $shop->description = $request->input('description');
        $shop->web_site = $request->input('web_site');
        $shop->email = $request->input('email');
        $shop->phone = $request->input('phone');
        $shop->categorie_shop_id = $request->input('categorie_shop_id');
        $shop->address = $request->input('address');
        $shop->city = $request->input('city');
        $shop->country = $request->input('country');
        $shop->user_id= $id_vendeur;
        $shop->categorie_shop_id = $request->input('categorie');
        $shop->save();

        return redirect()->back();
    }


    public function showCategorie(Request $request){
        $id= Auth::user()->id;
        $vendeurs = User::all();
        $vendeur = $vendeurs->find($id);
        $search = $request['search'] ??"";
        if($search!=""){
            $categories = db::table('categorie_products')->where('user_id',$vendeur->id)->where('name','LIKE',"%$search%")->get();
            //$categories = CategorieProduct::all()->where('user_id',$vendeur->id)->where('name','LIKE',"%$search%");
        }else{
            $categories = CategorieProduct::all()->where('user_id',$vendeur->id);
        }
        //dd($categories);
        return view('stevie.backend.vendeur.vendeur-categories-produits.vendeur-categories-produits',[
            'vendeur'=> $vendeur,
            'categorie'=>$categories
        ]);
    }

    public function addCategorie(Request $request){
        $id= Auth::user()->id;
        $categorie = new CategorieProduct();
        $categorie->name = $request->input('name');
        $categorie->description = $request->input('description');
        $categorie->active = 1;
        $categorie->user_id = $id;
        $categorie->save();
        return redirect()->back();
    }

    public function showEditCategorie($id){
        $categorie = CategorieProduct::find($id);
        $output='
        <div class="form-group">
        <input class="d-none" name="id_cat" type="text" value="'.$categorie->id.'">
            <label>Nom produit <span class="text-danger">*</span></label>
            <div >
                <input class="form-control" name="name" type="text" value="'.$categorie->name.'" required>
            </div>
        </div>
        <div class="form-group">
            <label>Description<span class="text-danger">*</span></label>
            <textarea rows="4" class="form-control" name="description" required>'.$categorie->description.'</textarea>
        </div>
        ';

        return response()->json($output);
    }

    public function editCategorie(Request $request){
        $id_cat = $request->input('id_cat');
        $categorie = CategorieProduct::find($id_cat);
        $categorie->name = $request->input('name');
        $categorie->description = $request->input('description');
        $categorie->update();
        return redirect()->back();
    }

    public function isActivatedCategorie($id){
        $categorie = CategorieProduct::find($id);
        if ($categorie->active == 1){
            $categorie->active=0;
            $categorie->update();
            return redirect()->back()->with('success', 'Catégorie désactivé avec succès !');
        }else{
            $categorie->active=1;
            $categorie->update();
            return redirect()->back()->with('success', 'Catégorie activé avec succès !');
        }
        return redirect()->back()->with('error', 'Echec !!! Prière de bien vouloir réessayer !');
    }

    public function deleteCategorieModal($id){

        $output ='
        <div class="col-6" >
            <a href="'.route('vendeur-deleteCategorie',$id).'" class="btn btn-primary continue-btn">Supprimer</a>
        </div>
        <div class="col-6">
            <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Non</a>
        </div>';
        return response()->json($output);
    }

    public function deleteCategorie($id ){
        //$id_user= Auth::user()->id;
        db::delete('delete from categorie_products where id = ?',[$id]);
        return redirect()->back();
    }

    public function profile()
    {
        $id= Auth::user()->id;
        $vendeurs = User::all();
        $vendeur = $vendeurs->find($id);
        return view('stevie.backend.vendeur.vendeur-profile.vendeur-profile', [
            'vendeur' => $vendeur
        ]);
    }

    public function editProfile(Request $request) {
        $id= Auth::user()->id;
        $vendeur = User::find($id);
        $vendeur->name = $request->input('name');
        $vendeur->first_name = $request->input('first_name');
        $vendeur->email = $request->input('email');
        $vendeur->gender = $request->input('gender');
        $time =  $request->input('birthday');
        $date = DateTime::createFromFormat('d/m/Y', $time);
        $date = $date->format('Y-m-d');
        $vendeur->birthday = $date;
        $vendeur->phone = $request->input('phone');
        $vendeur->address = $request->input('address');
        $vendeur->city = $request->input('city');
        $vendeur->country = $request->input('contry');
        $vendeur->update();
        return redirect()->back();
    }

    public function monPortefeuille(){
        $id= Auth::user()->id;
        $vendeurs = User::all();
        $vendeur = $vendeurs->find($id);
        return view('stevie.backend.vendeur.vendeur-mon-portefeuille.vendeur-mon-portefeuille',[
            'vendeur' => $vendeur,
        ]);
    }

    public function mesCommentaires(){
        $id= Auth::user()->id;
        $vendeurs = User::all();
        $vendeur = $vendeurs->find($id);
        return view('stevie.backend.vendeur.vendeur-mes-commentaires.vendeur-mes-commentaires',[
            'vendeur' => $vendeur,
        ]);
    }
}
