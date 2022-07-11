<?php

namespace App\Http\Controllers;
use App\Models\CategorieProduct;
use Illuminate\Http\Request;

class CategorieProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = CategorieProduct::paginate(50);
        //dd($categorie);
        return view('backend.categories-product.index', compact('categorie'));
    }


    public function isActivated(int $id){
        $product = CategorieProduct::find($id);

        if ($product->active === 1){
            $prod = CategorieProduct::where('id', $id)->update(['active' => 0]);
            return redirect()->back()->with('success', 'Produit désactivé avec succès !');
        }else{
            $prod = CategorieProduct::where('id', $id)->update(['active' => 1]);
            return redirect()->back()->with('success', 'Produit activé avec succès !');
        }
        return redirect()->back()->with('error', 'Echec !!! Prière de bien vouloir réessayer !');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = CategorieProduct::get();
        return view('backend.categories-product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $images = array();

        $data = [
            'name' => $request['name'],
            'description' => $request['description']
        ];

        $img = null;

        $product = CategorieProduct::create($data);
        if ($product){

            if($request->hasFile('images')){
                $files = $request->file('images');
                foreach($files as $key => $file){
                    //dd($product->id);
                    $img = Utils::saveOnePicture('categoryProduct', $product->id, $key, $file);
                }
            }
            $txt = "Category product created successfully !";
            $msg = "";
            $img != null? $msg = "Image(s) and ".$txt : $msg = " ".$txt;

            return redirect()->back()->with('success', $msg);
        }else{
            return redirect()->back()->with('error', "Cannot save this Category product !! Please retry");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $product = CategorieProduct::find($id);
        return view('backend.categories-product.show');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function createEdit(CategorieProduct $product)
    {
        return view('backend.products.edit', compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieProduct $product)
    {
        $prod = CategorieProduct::find($product->id);

        if($prod->name != $product->name || $prod->description != $product->description){
            $upd = CategorieProduct::where('id', $product->id)->update($product);
            if($upd){
                return redirect()->back()->with('success', 'Category product updated successfully !');
            }else {
                return redirect()->back()->with('error', 'Failed to update this category, retry!!');
            }
        }else{
            return redirect()->back()->with('Warning', 'Cannot update with the same values!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $prod = CategorieProduct::where('id', $id)->delete();
        //dd($prod);
        if($prod){
            return redirect()->back()->with('success', 'Category product deleted successfully')->withInput();
        }else{
            return redirect()->back()->with('Error', 'Impossible to delete this category product, please retry !')->withInput();
        }
    }
}
