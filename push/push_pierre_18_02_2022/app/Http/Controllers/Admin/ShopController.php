<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieShop;
use App\Models\Shop;
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
        $shops = Shop::all()->reverse();
        return view('backend.shop.index', [
            'shops' => $shops
        ]);
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
        return back();
    }
}
