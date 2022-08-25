<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ShopController;
use App\Http\Controllers\Api\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('v1')->group(function () {

    Route::get('categories-products', [ProductController::class, 'getCaregoriesProduct']);
    Route::get('categories-shops', [App\Http\Controllers\Api\Categorie_shopsController::class, 'index']);

    Route::get('products', [ProductController::class, 'index']);
    Route::get('product/{id}', [App\Http\Controllers\Api\ProductController::class, 'show']);
    Route::get('products/search/{word}', [ProductController::class, 'find']);

    //Route::apiResource('shops', ShopController::class);
    Route::get('shops', [ShopController::class, 'index']);
    Route::get('shops/{name}', [ShopController::class, 'indexByCategory']);

    Route::post('login', [LoginController::class, 'login']);
    Route::post('register', [LoginController::class, 'register']);

    Route::get('/orders/{id}', [OrderController::class, 'index']);
    Route::post('/order', [OrderController::class, 'store']);
});
