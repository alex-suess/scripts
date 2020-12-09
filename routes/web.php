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
    return view('index');
});

Route::get('/texts/remove', 'App\Http\Controllers\TextsController@showRemoveSlashes')->name('texts.slashes.remove.view');
Route::get('/texts/add', 'App\Http\Controllers\TextsController@showAddSlashes')->name('texts.slashes.add.view');
Route::post('/texts/remove', 'App\Http\Controllers\TextsController@removeSlashes')->name('texts.slashes.remove');
Route::post('/texts/add', 'App\Http\Controllers\TextsController@addSlashes')->name('texts.slashes.add');
