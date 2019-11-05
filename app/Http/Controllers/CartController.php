<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function getIndex()
    {
        $cards = Service::all();
        return view('cart.index', ['cards' => $cards]);
    }
    public function index()
    {
        return view('home');
    }
}
