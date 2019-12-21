<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ApartmentController extends Controller
{
    public function index()
    {
        $rooms = DB::table('rooms')->where('type_id', '2')->get();
        return view('apartment.index')->with('rooms', $rooms);
    }
}
