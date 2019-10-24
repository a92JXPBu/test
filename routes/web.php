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
use Illuminate\Http\Request;
Route::get('/', 'GroupsController@show');

Route::get('items/{id_group}', 'ItemsController@show')->name('items');

Route::get('cart', 'CartController@show')->name('карзина');
Route::get('cart/add/{group_id}:{item_id}', 'CartController@add')->name('cart.add');
Route::get('cart/delete/{id_item}', 'CartController@delete')->name('cart.delete');
