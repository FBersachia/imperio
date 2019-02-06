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

Route::get('/', 'PagesController@inicio');

Route::get('inicio', 'PagesController@inicio')->name('inicio');

Route::get('products', 'PagesController@products')->name('listado');

Route::get('nosotras', 'PagesController@nosotras')->name('nosotras');

Route::get('contacto', 'PagesController@contacto')->name('contacto');

Route::get('product-detail/{id}', 'PagesController@detalle');

Route::get('carrito', 'ShoppingCartsController@index')->name('carrito');

Route::resource('in_shopping_carts', 'InShoppingCartsController', [
    'only' => ['store', 'destroy']
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
