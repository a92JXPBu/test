<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ItemsController extends Controller
{
    //
    public function show($group_id)
    {
        $items = App\Items::where('group_id', $group_id)->get();
        $cartSize = App\Cart::all()->count();
        return view('items', compact('items', 'cartSize'));
    }
}
