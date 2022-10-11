<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request){
        $user_id= $request->user_id;
        $profile = User::find($user_id);
        return response()->json(['profile'=>$profile]);
    }

    public function edit (Request $request){
        $user_id= $request->user_id;
        $profile = User::find($user_id);
        $profile->name = $request->name;
        $profile->first_name = $request->first_name;
        $profile->email = $request->email;
        $profile->gender = $request->gender;
        $profile->birthday = $request->birthday;
        $profile->address = $request->address;
        $profile->city = $request->city;
        $profile->country = $request->country;
        $profile->phone = $request->phone;
        $profile->update();
        return response()->json(['message'=>'Profile mise à jour']);
    }
}
