<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return response()->json(['data', Order::where('user_id', $id)->get()]);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        //dd(json_decode(html_entity_decode(json_encode($request->order), true), true));
        //dd($request['order']);
        $validation = Validator::make($request->all(),[
            'order.*.user_id'       => 'required|integer',
            'order.*.shop_id'       => 'required|integer',
            'order.*.product_id.*'       => 'required|integer',
            'order.*.price.*'       => 'required|numeric',
            'order.*.quantity.*'       => 'required|integer'
        ]);

        if($validation->fails()){

            return response()->json([
                'error'  => $validation->errors()
            ]);
        }

        $order = [];
        foreach (json_decode(json_encode(html_entity_decode($request['order']))) as $value) {
            $code = 'ORDER'.now();
            //dd($value);

            $data = [
                'code'       => $code,
                'user_id'       => $value['user_id'],
                'shop_id'       => $value['shop_id'],
                'product_id'       => $value['product_id'],
                'price'       => $value['price'],
                'quantity'       => $value['quantity'],
                'transaction_state'     => 0,
                'order_state'       => 'En cours'
            ];

            $order[] = Order::create($data);
        }
        if($order){
            return response()->json([
                'message' => 'Saved successfully',
                'data' => $order
            ]);
        }else{
            return response()->json([
                'error' => 'Order not correctly saved'
            ]);
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
        //
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
