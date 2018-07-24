<?php
Route::get('/', 'HomeController@index');

Route::get('items/confirm', 'ItemController@confirm');
Route::resource('items', 'ItemController');
Route::get('items', 'ItemController@getSearch');
Route::get('items/add/{id}', 'ItemController@addItem');
Route::post('items/remove', 'ItemController@removeItem');
Route::post('items/purchase', 'ItemController@purchaseItem');
