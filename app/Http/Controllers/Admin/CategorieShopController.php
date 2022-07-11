<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieShop;
use Illuminate\Http\Request;

class CategorieShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategorieShop::all()->reverse();
        return view('backend.categories.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('backend.categorie-shop.create');
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
            'name' => 'required',
        ]);
        $categorie = CategorieShop::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
        ]);
        return redirect()->route('categorie-shop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = CategorieShop::find($id);
        return view('backend.categorie-shop.show', [
            'categorie' => $categorie
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
        $categorie = CategorieShop::find($id);
        return view('backend.categorie-shop.edit', [
            'categorie' => $categorie
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
            'name' => 'required',
        ]);
        $categorie = CategorieShop::findOrFail($id);
        $categorie->name = $request->name;
        $categorie->description = $request->description;
        $categorie->image = $request->image;
        $categorie->save();
        return redirect()->route("categorie-shop.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = CategorieShop::findOrFail($id);
        $categorie->delete();
        return back();
    }
}
