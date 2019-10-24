<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class GroupsController extends Controller
{
    //
    public function show()
    {
        $groups=App\Groups::all();
        $cartSize=App\Cart::all()->count();
        return view('welcome', compact('groups','cartSize'));
    }
}
