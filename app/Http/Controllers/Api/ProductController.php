<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categorie_product;
use App\Models\Favori;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['data', Product::all()->load('Categories_has_products.Categorie_product')]);
    }

    public function find($word)
    {
       return response()->json(['data', Product::where('name', '%'.$word.'%')->orWhere('description', 'LIKE', '%'.$word.'%')->get()]);
    }

    public function getCaregoriesProduct(){
        return response()->json(['data', Categorie_product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return response()->json(['data', Product::where('id', $id))];
        return response()->json(['product', Product::where('id', $id)->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function showFavoris(Request $request){
        $user_id = $request->user_id;
        $fav = DB::table('favoris')->select(db::raw('products.id,products.name,products.price'))
        ->join('users', 'favoris.user_id', '=', 'users.id')
        ->join('products', 'favoris.favorisable_id', '=', 'products.id')
        ->where('users.id', $user_id)
        ->where('favoris.favorisable_type', 'Product')->get();
        return response()->json(['favoris'=>$fav]);
    }

    public function isFavoris(Request $request){

        $user_id = $request->user_id;
        $product_id = $request->product_id;
        $fav = Favori::where('favorisable_id',$product_id)->where('user_id',$user_id)->get();
        $count = count($fav);
        if($count >=1){
            foreach($fav as $fav){
                $id_fav = $fav->id;
            }
            db::delete('delete from favoris where id = ?',[$id_fav]);
            return response()->json(['message'=>'Favoris retirer avec succes']);
        }else{
            $favoris = new Favori();
            $favoris->user_id= $user_id;
            $favoris->favorisable_id = $product_id;
            $favoris->favorisable_type = 'Product';
            $favoris->save();
            return response()->json(['message'=>'Favoris ajouter avec succes']);
        }
    }
}
