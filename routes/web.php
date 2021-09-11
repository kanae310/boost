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

Route::get('/', 'HelloController@index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/user', 'HelloController@user')->middleware(['auth'])->name('user');
Route::get('/event/detail/{event_id}', 'EventController@detail')->middleware(['auth'])->name('user');
Route::get('/event', 'EventController@show')->middleware(['auth'])->name('user');
Route::get('/event/{category_id}', 'EventController@categoryShow')->middleware(['auth'])->name('user');
Route::get('/category', 'EventController@categoryShow')->middleware(['auth'])->name('user');
Route::get('/event/apply/{event_id}', 'ApplicationController@store')->middleware(['auth'])->name('user');

require __DIR__ . '/auth.php';
