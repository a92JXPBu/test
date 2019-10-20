<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class controllerHelloWorld extends Controller
{
    //
    public function index() {
        $groups=App\modelHelloWorld::all();
        return view('db', compact('groups'));
    }
}
