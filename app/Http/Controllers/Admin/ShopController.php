<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieShop;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::all()->load('categorieShop')->reverse();
        for ($i=0; $i<count($shops); $i++) {
           $shops[$i]->user = (User::find($shops[$i]->user_id));
        }
        //dd($shops);
        return view('stevie.backend.admin.admin-list-commerces.admin-list-commerces',
                    ['shops' => $shops]);
        /*return view('backend.shop.index', [
            'shops' => $shops
        ]);*/
    }

    public function indexCategoriesShops()
    {
        $shops = CategorieShop::all();
        /*for ($i=0; $i<count($shops); $i++) {
           $shops[$i]->user = (User::find($shops[$i]->user_id));
        }*/
        //dd($shops);
        return view('stevie.backend.admin.admin-categories-commerces.admin-categories-commerces',
                    ['categories' => $shops]);
        /*return view('backend.shop.index', [
            'shops' => $shops
        ]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategorieShop::all()->reverse();
        return view('backend.shop.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'categorie_shop_id' => 'required|integer',
            'content' => 'nullable|string',
            'web_site' => 'nullable|string',
            'email' => 'nullable|string',
        ]);

        Shop::create([
            'name' => $request->name,
            'categorie_shop_id' => $request->categorie_shop_id,
            // 'description ' => $request->content,
        ]);
        return redirect()->route('shop.index');
    }

    public function storeCategoriesShop(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'string'
        ]);

        //dd($request['name']);
        $shop = CategorieShop::create([
            'name' => $request->name,
            //'categorie_shop_id' => $request->categorie_shop_id,
            'description' => $request->description
        ]);

        if($shop){
            return redirect()->back()->with('success', 'Catégorie créée avec succes')->withInput();
        }else{
            return redirect()->back()->with('Error', 'Impossible de créer cette catégorie, priere de réessayer !')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop = Shop::find($id);
        return view('backend.shop.show', [
            "shop" => $shop
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('backend.shop.edit', [
            "shop" => $shop
        ]);
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
        $request->validate([
            'name' => 'required|string',
            'categorie_shop_id' => 'required|numeric',
            'description' => 'string',
            'web_site' => 'string',
            'email' => 'string',
        ]);
        $shop =Shop::findOrFail($id);
        $shop->name = $request->name;
        $shop->categorie_shop_id = $request->categorie_shop_id;
        $shop->description = $request->description;
        $shop->web_site = $request->web_site;
        $shop->email = $request->email;
        $shop->save();
        return redirect()->route('shop.index');
    }

    public function updateCategoriesShop(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'string'
        ]);
        $shop =Shop::findOrFail($id);
        $shop->name = $request->name;
        $shop->description = $request->description;
        $shop->save();
        if($shop){
            return redirect()->back()->with('success', 'Catégorie modifiée avec succes')->withInput();
        }else{
            return redirect()->back()->with('Error', 'Impossible de modifier cette catégorie, priere de réessayer !')->withInput();
        }
    }

    public function isActivated(int $id){
        $product = CategorieShop::find($id);

        if ($product->isActive == 1){
            $prod = CategorieShop::where('id', $id)->update(['isActive' => 0]);
            return redirect()->back()->with('success', 'Catégorie désactivée avec succès !');
        }else{
            $prod = CategorieShop::where('id', $id)->update(['isActive' => 1]);
            return redirect()->back()->with('success', 'Catégorie activée avec succès !');
        }
        return redirect()->back()->with('error', 'Echec !!! Prière de bien vouloir réessayer !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop = Shop::findOrFail($id);
        $shop->delete();
        if($shop){
            return redirect()->back()->with('success', 'Boutique effacée avec succes !')->withInput();
        }else{
            return redirect()->back()->with('Error', 'Impossible d\'éffacer cette boutique, prière de réessayer !')->withInput();
        }
    }

    public function destroyCategoriesShop($id)
    {
        $shop = CategorieShop::findOrFail($id);
        $shop->delete();
        if($shop){
            return redirect()->back()->with('success', 'Catégorie effacée avec succes !')->withInput();
        }else{
            return redirect()->back()->with('Error', 'Impossible d\'éffacer cette catégorie, prière de réessayer !')->withInput();
        }
    }
}
