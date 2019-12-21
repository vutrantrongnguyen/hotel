<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
        $rooms = DB::table('rooms')->where('type_id', '3')->get();
        return view('event.index')->with('rooms', $rooms);
    }
}
