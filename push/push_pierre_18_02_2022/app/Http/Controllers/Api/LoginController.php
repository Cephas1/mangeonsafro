<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = auth()->user()->createToken('Laravel Password Grant Client')->plainTextToken;
            return response()->json(['meta'=>'success','token' => $token, 'user' => $user], 200);
        } else {
            return response()->json(['error' => 'UnAuthorised'], 401);
        }
    }

        /**
     * @OA\Post(
     *     path="/v1/register",
     *     operationId="register",
     *     tags={"Tests"},
     *     summary="Register a new user",
     *     description="Returns the new user",
     *     @OA\Response(
     *        response=200,
     *       description="Successful operation",
     *      @OA\MediaType(
     *          mediaType="application/json",
     *     )
     * )
     * )
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = auth()->user()->createToken('Laravel Password Grant Client')->plainTextToken;

        return response()->json(['meta'=>'success','token' => $token, 'user' => $user], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['message' => 'Successfully logged out'], 200);
    }

}
