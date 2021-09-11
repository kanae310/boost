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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HelloController@index');
Route::get('/user', 'HelloController@user');
Route::get('/event/detail/{event_id}', 'EventController@detail');
Route::get('/event/show/{category_id?}', 'EventController@show');
