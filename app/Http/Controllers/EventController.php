<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
        $rooms = DB::table('rooms')->where('type_id', '3')->get();
        return view('event.index')->with('rooms', $rooms);
    }

    public function show($id){
        $room = DB::table('rooms')->where('id', $id)->get()->first();
        $photos = Photo::where('room_id', $id)->get();
        return view('event.event_detail', compact('room', 'photos'));
    }
}
