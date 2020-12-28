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
    return view('welcome');
});

route::get('home', 'HomeController@index');
route::get('publikasi', 'HomeController@publikasi');
route::get('post/{slug}', 'HomeController@post');
route::get('desa', 'HomeController@desa');
route::get('perangkat', 'HomeController@perangkat');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
