<?php

namespace Route\Http;

use \Illuminate\Support\Facades\Route;

class Product
{
    public static function register()
    {
        //'auth:sanctum', Removed As Heroku providing limited access
        //Route::group(['middleware' => ['auth:sanctum']], function () {
            Route::get('create_product', 'ProductController@create')->name('create.products');
        //});
    }
}
