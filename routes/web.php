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

Route::get('/', 'GroupsController@show');

Route::get('items/{id_group}', 'ItemsController@show');

Route::get('cart', 'CartController@show');
Route::get('cart/add/{id_group}:{id_item}', 'CartController@add');
Route::get('cart/delete/{id_item}', 'CartController@delete');
Route::get('cart/test', 'CartController@test');
