<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    public function index()
    {
        $rooms = DB::table('rooms')->where('type_id', '4')->get();
        return view('restaurant.index')->with('rooms', $rooms);
    }
    public function show($id){
        $room = DB::table('rooms')->where('id', $id)->get()->first();
        $photos = Photo::where('room_id', $id)->get();
        return view('restaurant.restaurant_detail', compact('room', 'photos'));
    }
}
