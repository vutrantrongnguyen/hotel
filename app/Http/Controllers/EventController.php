<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $tab = 3;
        return view('event.index', compact('tab'));

    }
}
