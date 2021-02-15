<?php
//CATALOG
Route::get('/catalogs', 'App\Http\Controllers\CatalogController@index');
Route::get('/catalog/{id}', 'App\Http\Controllers\CatalogController@show');
Route::post('/catalog', 'App\Http\Controllers\CatalogController@store');
Route::post('/catalog/{id}', 'App\Http\Controllers\CatalogController@update');
Route::delete('/catalog/{id}', 'App\Http\Controllers\CatalogController@destroy');
//PRODUCT
Route::get('/products', 'App\Http\Controllers\ProductController@index');
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@show');
Route::post('/product', 'App\Http\Controllers\ProductController@store');
Route::post('/product/{id}', 'App\Http\Controllers\ProductController@update');
Route::delete('/product/{id}', 'App\Http\Controllers\ProductController@destroy');
//PURCHASE
Route::get('/purchases', 'App\Http\Controllers\PurchaseController@index');
Route::get('/purchase/{id}', 'App\Http\Controllers\PurchaseController@show');
Route::post('/purchase', 'App\Http\Controllers\PurchaseController@store');
Route::post('/purchase/{id}', 'App\Http\Controllers\PurchaseController@update');
Route::delete('/purchase/{id}', 'App\Http\Controllers\PurchaseController@destroy');



