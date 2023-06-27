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
Route::post('/home', 'App\Http\Controllers\TestRouteController@home');
Route::post('/testurl', 'App\Http\Controllers\TestRouteController@testurl');
Route::post('/index', 'App\Http\Controllers\User@index');
//Route::get('/home', [TestRouteController::class, 'home']);