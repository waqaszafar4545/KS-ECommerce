<?php

namespace Route\Api;

use \Illuminate\Support\Facades\Route;

<<<<<<< HEAD
class Auth
{
    static function register()
    {

        Route::get('create_product', 'ProductController@create')->name('create_product');
=======
class Product
{
    public static function register()
    {
        //'auth:sanctum', Removed As Heroku providing limited access
        //Route::group(['middleware' => ['auth:sanctum']], function () {
            Route::post('get_products', 'ProductController@getProducts')->name('get.products');
            Route::get('create_products', 'ProductController@createProducts')->name('create.products');
        //});
>>>>>>> mudassir
    }
}
