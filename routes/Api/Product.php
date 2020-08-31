<?php

namespace Route\Api;

use \Illuminate\Support\Facades\Route;

class Product
{
    public static function register()
    {
        //'auth:sanctum', Removed As Heroku providing limited access
        //Route::group(['middleware' => ['auth:sanctum']], function () {
            Route::post('get_products', 'ProductController@getProducts')->name('get.products');
            Route::post('store_product','ProductController@store');
        //});
    }
}
