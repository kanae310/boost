<?php

use App\Http\Controllers\EventController;
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

//ログイン不要のTOP画面
Route::get('/', 'EventController@index');

//マイページ画面
Route::get('/user', 'UserController@index')->middleware(['auth'])->name('user');

//ログイン後の一覧画面
Route::get('/event', 'EventController@show')->middleware(['auth'])->name('event.show');

//カテゴリー選択画面
Route::get('/event/category', 'EventController@categoryShow')->middleware(['auth'])->name('category.show');

//カテゴリー検索結果
Route::get('/event/category/{category_id}', 'EventController@show')->middleware(['auth'])->name('category.result');

//詳細画面
Route::get('/event/detail/{event_id}', 'EventController@detail')->middleware(['auth'])->name('detail');

//応募機能
Route::get('/event/detail/{event_id}/apply', 'ApplicationController@store')->middleware(['auth'])->name('event.apply');

//イベント作成画面
Route::get('/event/create', 'EventController@create')->middleware(['auth'])->name('event.create');

//イベント投稿画面
Route::post('/event/store', 'EventController@store')->middleware(['auth'])->name('event.store');

//イベント削除画面
//未完成のため、今後実装予定。
// Route::delete('/event/delete{event_id}', 'EventController@delete')->middleware(['auth'])->name('event.delete');

//申し込んだイベント一覧画面
Route::get('/user/event/applied', 'ApplicationController@appliedShow')->middleware(['auth'])->name('user.applied');

//投稿したイベント一覧画面
Route::get('/user/event/post-show', 'ApplicationController@postShow')->middleware(['auth'])->name('user.post-show');

//過去に参加したイベント一覧画面
Route::get('/user/event/past-applied', 'ApplicationController@pastAppliedShow')->middleware(['auth'])->name('user.past-applied');

require __DIR__ . '/auth.php';
