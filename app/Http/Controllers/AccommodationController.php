<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AccommodationController extends Controller
{
    public function index()
    {
        $rooms = DB::table('rooms')->where('type_id', '1')->get();
        return view('accommodation.index')->with('rooms', $rooms);
    }
}
