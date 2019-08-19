<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/funcionarios', 'HomeController@users')->name('funcionarios');

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
    Route::get('/edit/{id}', 'ProductsController@edit')->name('product-edit');
    Route::post('/update/{id}', 'ProductsController@update')->name('product-up');
    Route::get('/delete/{id}', 'ProductsController@destroy')->name('product-destroy');
    Route::get('/relatorio', 'ProductsController@relatorioGrafico')->name('product-relatorio');
});

Route::prefix('graficos')->group(function () {
    Route::get('/', 'ProductsController@relatorio')->name('relatorio');
});

Route::prefix('clients')->group(function () {
    Route::get('/', 'ClientsController@index')->name('clients');
    Route::get('/create', 'ClientsController@create')->name('client-add');
    Route::post('/', 'ClientsController@store')->name('client');
    Route::get('/edit/{id}', 'ClientsController@edit')->name('client-edit');
    Route::post('/update/{id}', 'ClientsController@update')->name('client-up');
    Route::get('/delete/{id}', 'ClientsController@destroy')->name('client-destroy');
});

Route::prefix('estoque-entrada')->group(function () {
    Route::get('/', 'EstoqueEntradasController@index')->name('estoque-entrada');
    Route::post('/', 'EstoqueEntradasController@store')->name('estoque-entrada');
    Route::get('/create', 'EstoqueEntradasController@create')->name('estoque-entrada-add');
});

Route::prefix('estoque-saida')->group(function () {
    Route::get('/', 'EstoqueSaidasController@index')->name('estoque-saida');
    Route::post('/', 'EstoqueSaidasController@store')->name('estoque-saida');
    Route::get('/create', 'EstoqueSaidasController@create')->name('estoque-saida-add');
});
