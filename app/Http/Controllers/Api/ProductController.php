<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categorie_product;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Vote;
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
        //return response()->json(['data', Product::all()->load('Categories_has_products.Categorie_product')]);
        $brut = Product::all();
        $list = [];

        foreach($brut as $value){
            $comments = Comment::where('commentable_id',$value->id)->all();
            $votes = Vote::where('votesable_id', $value->id)->all();

            if($comments){
                $list[] = ['product' => $value,
                           'comments' => $comments,
                           'votes' => $votes? $votes : 'No votes for this product'];
            }else{
                $list[] = ['product' => $value,
                           'comments' => "No comments for this product",
                           'votes' => $votes? $votes : 'No votes for this product'];
            }
        }
        dd($list);
        //dd(Comment::all());

        return response()->json(['data', Product::all()]);
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
}
