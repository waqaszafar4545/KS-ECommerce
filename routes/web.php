<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $view = (Auth::check()) ? 'home' : 'login';

    return redirect($view);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('create', 'CoursesController@showCreate')->name('courses.showCreate');



Route::get('/exhibition', 'HomeController@exhibitionList')->name('exhibition');
Route::get('/organiser', '\App\Http\Controllers\HomeController@organiserindex')->name('organiser');
Route::get('/exdetail', '\App\Http\Controllers\HomeController@exhibitorDetail')->name('exdetail');
Route::get('/exhibitor', '\App\Http\Controllers\HomeController@exhibitor')->name('exhibitor');
Route::get('/addexhibitor', '\App\Http\Controllers\HomeController@addexhibitor')->name('addexhibitor');
Route::get('/showguide', '\App\Http\Controllers\HomeController@showguide')->name('showguide');
Route::get('/orletrature', '\App\Http\Controllers\HomeController@letrature')->name('orletrature');
Route::get('/orseminarlist', '\App\Http\Controllers\HomeController@semiranlist')->name('orseminarlist');
Route::get('/orseminaradd', '\App\Http\Controllers\HomeController@semiranadd')->name('orsemiranadd');
Route::get('/orsoftware', '\App\Http\Controllers\HomeController@software')->name('orsoftware');
