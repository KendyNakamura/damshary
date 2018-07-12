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

/*
Route::get('/items', 'ItemController@index');
Route::get('/items/show', 'ItemController@show');
Route::get('/items/create', 'ItemController@create');
Route::post('/items/store', 'ItemController@store');
 */

Route::resource('items', 'ItemController');
Route::get('items', 'ItemController@getSearch');
