<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function index()
    {
        $tab = 2;
        return view('accommodation.index', compact('tab'));

    }
}
