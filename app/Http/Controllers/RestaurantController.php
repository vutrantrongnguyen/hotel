<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    public function index()
    {
        $rooms = DB::table('rooms')->where('type_id', '4')->get();
        return view('restaurant.index')->with('rooms', $rooms);
    }
}
