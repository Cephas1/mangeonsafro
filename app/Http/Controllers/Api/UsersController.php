<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCountriesAndCities()
    {
        $countries =  Shop::get('country');
        $cities = Shop::get('city');

        return response()->json(['data' => [
                                            'countries' => $countries,
                                            'cities' => $cities]
                                            ]);
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

    public function addDeliveryAdress($id, $name)
    {
        //dd($request);
        $user = new User();
        $user = User::where('id', $id)->first();
        $user->client_delivery_address = $name;

        //$saved = User::save($user);

        if($user->save()){
            return response()->json(['message' => 'User delivery adress saved successfully',
                                     'data' => $user]);
        }else{
            return response()->json(['message' => 'Failed to save user delivery adress']);
        }
    }

    public function editDeliveryAdress($id, $name)
    {
        $user = new User();
        $user = User::where('id', $id)->first();
        $user->client_delivery_address = $name;

        //$saved = User::update($user);

        if($user->update()){
            return response()->json(['message' => 'User delivery adress updated successfully',
                                     'data' => $user]);
        }else{
            return response()->json(['message' => 'Failed to update user delivery adress']);
        }
    }

    public function deleteDeliveryAdress($id)
    {
        $user = new User();
        $user = User::where('id', $id)->first();
        $user->client_delivery_address = "";

        //$saved = User::save($user);


        if($user->save()){
            return response()->json(['message' => 'User delivery adress removed successfully',
                                     'data' => $user]);
        }else{
            return response()->json(['message' => 'Failed to save remove delivery adress']);
        }
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
