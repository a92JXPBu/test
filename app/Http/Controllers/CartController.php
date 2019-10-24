<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CartController extends Controller
{
    //
    public function show()
    {
        $cart=App\Cart::all();
        $cartSize = count($cart);
        return view('cart', compact('cart','cartSize'));
    }
    public function add($group_id, $item_id)
    {
        $order=App\Cart::where('item_id', $item_id);
        if ($order->count() != 0)
            $order->increment('count');
        else
            App\Cart::insertOrIgnore(['item_id' => $item_id]);
        $cart=App\Cart::all();
        $cartSize = count($cart);
        $items = App\Items::where('group_id', $group_id)->get();
        return view('items', compact('cart','cartSize', 'items'));
    }
    public function delete($id)
    {
        App\Cart::destroy($id);
        $cart=App\Cart::all();
        $cartSize = count($cart);
        return view('cart', compact('cart','cartSize'));
    }
    public function test()
    {
        $items = App\Cart::with('items')->get();
        return $items;
    }
}
