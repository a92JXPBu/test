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

Route::get('/', function () {
    $groups=App\modelHelloWorld::all();
    $cartSize = DB::table('cart')->get()->count();
    return view('welcome', compact('groups','cartSize'));
});
Route::get('groups/{id}', function ($id) {
    $items = DB::table('items')->where('group', $id)->get();
    $cartSize = count(DB::table('cart')->get());
    return view('items', compact('items', 'cartSize'));
});
Route::get('cart', function () {
    $cart=DB::table('cart')->get();
    $cartSize = count($cart);
    $items = [];
    foreach($cart as $order) {
        $item = DB::table('items')->where('id', $order->id_item)->first();
        array_push($items, $item);
    }
    return view('cart', compact('cart','cartSize', 'items'));
});
Route::get('cart/add/{group}:{id}', function ($group, $id) {
    $product=DB::table('cart')->where('id_item', $id);
    if ($product->count() != 0)
        $product->increment('count');
    else
        DB::table('cart')->insertOrIgnore(['id_item' => $id, 'count' => 1]);
    $cart=DB::table('cart')->get();
    $cartSize = count($cart);
    $items = DB::table('items')->where('group', $group)->get();
    return view('items', compact('cart','cartSize', 'items'));
});
Route::get('корзина/удалить/{id}', function ($id) {
    DB::table('cart')->where('id', $id)->delete();
    $cart=DB::table('cart')->get();
    $cartSize = count($cart);
    $items = [];
    foreach($cart as $order) {
        array_push($items, DB::table('items')->where('id', $order->id_item)->first());
    }
    return view('cart', compact('cart','cartSize', 'items'));
});

Route::get('controllerHelloWorld', 'controllerHelloWorld@index');
