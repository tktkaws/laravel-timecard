<?php

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

Auth::routes();
Route::get('/', 'StartTimeController@index')->name('start_times.index'); //-- この行を編集
Route::resource('/start_times', 'StartTimeController')->except(['index'])->middleware('auth'); //-- この行を変更
// update destroyは管理者only

