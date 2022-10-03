<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terminated = count(Order::where('order_state', 1)->get());
        $waitingOrders = count(Order::where('order_state', 0)->get());
        $data = [];

        $all = Order::all()->load('shop')->groupBy('shop_id');
        //dd($all);
        foreach ($all as $key => $value) {
            $shopName = $value[0]->shop->name;
            $shopNumber = $value[0]->shop->phone;
            $order0 = 0;
            $order1 = 0;
            foreach ($value as $key1 => $value1) {
                if($value1->order_state == 0){
                    $order0 ++;
                }elseif ($value1->order_state == 1) {
                    $order1 ++;
                }
            }
            $data[] = [
                "shop" => $shopName,
                "shopNumber" => $shopNumber,
                "orders0" => $order0,
                "orders1" => $order1,
                "ordersCount" => count($value)
            ];
        }

        //dd($data);
        return view('stevie.backend.admin.admin-gestion-des-commandes.admin-gestion-des-commandes', [
            'terminated' => $terminated, 'waitingOrders' => $waitingOrders, 'ordersCount' => count(Order::all()), 'data' => $data]);
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
