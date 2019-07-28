<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('category')->group(function () {
    Route::get('/', 'CategoryController@index')->name('categories');
    Route::post('/', 'CategoryController@store')->name('category');
    Route::get('/delete/{id}', 'CategoryController@destroy')->name('category-destroy');
});

Route::prefix('mobile')->group(function () {
    Route::get('/', 'MobileController@index')->name('mobile');
});

Route::prefix('products')->group(function () {
    Route::get('/', 'ProductsController@index')->name('products');
    Route::post('/', 'ProductsController@store')->name('product');
    Route::get('/delete/{id}', 'ProductsController@destroy')->name('product-destroy');
});

Route::prefix('clients')->group(function () {
    Route::get('/', 'ClientsController@index')->name('clients');
    Route::get('/create', 'ClientsController@create')->name('client-add');
    Route::post('/', 'ClientsController@store')->name('client');
    Route::get('/edit/{id}', 'ClientsController@edit')->name('client-edit');
    Route::post('/update/{id}', 'ClientsController@update')->name('client-up');
    Route::get('/delete/{id}', 'ClientsController@destroy')->name('client-destroy');
});
