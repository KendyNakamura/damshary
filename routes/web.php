<?php
Route::get('/', 'HomeController@index');

Route::get('items', 'ItemController@index')->name('item.index');
Route::get('items/confirm', 'ItemController@confirm');
Route::get('items/complete', 'ItemController@complete');
// Route::get('items', 'ItemController@getSearch');
Route::get('items/add/{id}', 'ItemController@addItem');
Route::post('items/remove', 'ItemController@removeItem');
Route::post('items/purchase', 'ItemController@purchaseItem')->name('item.purchase');
