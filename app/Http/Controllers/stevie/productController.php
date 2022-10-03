<?php

namespace App\Http\Controllers\stevie;

use App\Http\Controllers\Controller;
use App\Models\Favori;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function showFavoris(){
        $outpout="";
        if(Auth::user()){
            $id_user = Auth::user()->id;
            $fav = DB::table('favoris')->select(db::raw('products.id,products.name,products.price'))
            ->join('users', 'favoris.user_id', '=', 'users.id')
            ->join('products', 'favoris.favorisable_id', '=', 'products.id')
            ->where('users.id', $id_user)
            ->where('favoris.favorisable_type', 'Product')->get();
            $nbr_fav = count($fav);
            //dd($fav);
            return view('stevie.frontend.favoris.favoris',[
                'favoris'=>$fav,
                'nbr_favoris'=> $nbr_fav,
            ]);
        }else{
            return view('stevie.frontend.favoris.favoris');
        }
    }

    public function isFavoris($id_product){
        if(Auth::user()){
            $id_user = Auth::user()->id;
            $fav = Favori::where('favorisable_id',$id_product)->where('user_id',$id_user)->get();
            //dd($fav);
            $count = count($fav);
            if($count >=1){
                foreach($fav as $fav){
                    $id_fav = $fav->id;
                }
                db::delete('delete from favoris where id = ?',[$id_fav]);
                return redirect()->back();
            }else{
                $favoris = new Favori();
                $favoris->user_id= $id_user;
                $favoris->favorisable_id = $id_product;
                $favoris->favorisable_type = 'Product';
                $favoris->save();
                return redirect()->back();
            }
        }else{
            return route('login');
        }
    }

    public function allProduct(){
        $product = Product::Paginate(12);
        return view('stevie.frontend.shop-grid.shop-grid',[
            'products'=>$product,
        ]);
    }

    public function detailProduct($id_product){
        $product = Product::find($id_product);
        $prod = $product->load('vote');

        $votes = 0;

        for ($i=0; $i < count($prod->vote); $i++) {
            $votes += $prod->vote[$i]->vote;
        }
        if(count($prod->vote)>=1){
            $votes = $votes/count($prod->vote);
        }

        //dd($product);
        return view('stevie.frontend.product-details.product-details',[
            'product'=>$product,
            'votes' => $votes
        ]);
    }
}
