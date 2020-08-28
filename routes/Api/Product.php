<?php

namespace Route\Api;

use \Illuminate\Support\Facades\Route;

class Auth
{
    static function register()
    {

        Route::get('create_product', 'ProductController@create')->name('create_product');
    }
}
