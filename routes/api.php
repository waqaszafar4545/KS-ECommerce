<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Route\Api\Auth;
use Route\Api\Product;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Auth::register();
Product::register();
//Route::post('login', 'AuthController@login');
