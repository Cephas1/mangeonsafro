<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Admin\ImageCategoriesController;
use App\Models\Categorie_product;
use App\Models\CategorieProduct;
use App\Models\ImageProduct;
use App\Models\Product;
use App\Models\Products;
use App\Models\Shop;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::paginate(50)->load('categories', 'images');
        //dd($products);
        $productCount = Products::count();
        $productsCategories = Categorie_product::get();
        $categoryProducts = CategorieProduct::get();
        //dd($categoryProducts);
        $shops = Shop::get();

        //$data = [];

        return view('backend.products.index', compact('products', 'productCount', 'productsCategories', 'shops', 'categoryProducts'));
    }


    public function isActivated(int $id){
        $product = Products::find($id);

        if ($product->active === 1){
            $prod = Products::where('id', $id)->update(['active' => 0]);
            return redirect()->back()->with('success', 'Produit désactivé avec succès !');
        }else{
            $prod = Products::where('id', $id)->update(['active' => 1]);
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
        $categories = CategorieProduct::get();
        return view('products.create', compact('categories'));
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
            'shop_id' => $request['shop_id'],
            'description' => $request['description']
        ];

        $img = null;

        $product = Product::create($data);
        if ($product){

            if($request->hasFile('images')){
                $files = $request->file('images');
                foreach($files as $key => $file){
                    //dd($product->id);
                    $img = Utils::saveOnePicture('products', $product->id, $key, $file);
                }
            }
            $txt = "Product created successfully !";
            $msg = "";
            $img != null? $msg = "Image(s) and ".$txt : $msg = " ".$txt;

            return redirect()->back()->with('success', $msg);
        }else{
            return redirect()->back()->with('error', "Cannot save this product !! Please retry");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $product = Product::find($id);
        return view('backend.products.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function createEdit(Product $product)
    {
        //$prod = Product::find($product->id);
        $productsCategories = CategorieProduct::get();
        $shops = Shop::get();

        return view('backend.products.edit', compact('product','productsCategories','shops'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $prod = Product::find($product->id);

        if($prod->name != $product->name || $prod->description != $product->description){
            $upd = Product::where('id', $product->id)->update($product);
            if($upd){
                return redirect()->back()->with('success', 'Product updated successfully !');
            }else {
                return redirect()->back()->withErrors($upd)->withInput();
            }
        }else{
            return redirect()->back()->with('Warning', 'Cannot update with the same values!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $prod = Product::where('id', $id)->delete();
        //dd($prod);
        if($prod){
            return redirect()->back()->with('success', 'Product deleted successfully')->withInput();
        }else{
            return redirect()->back()->with('Error', 'Impossible to delete this product, please retry !')->withInput();
        }
    }
}
