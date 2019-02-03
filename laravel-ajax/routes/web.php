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

Route::get('productos', 'PagesController@productos')->name('productos');

Route::get('nosotras', 'PagesController@nosotras')->name('nosotras');

Route::get('contacto', 'PagesController@contacto')->name('contacto');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
