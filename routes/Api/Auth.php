<?php

namespace Route\Api;

use \Illuminate\Support\Facades\Route;

class Auth
{
    static function register()
    {

        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout');
    }

}
