<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Support\Facades\DB;

class ApartmentController extends Controller
{
    public function index()
    {
        $rooms = DB::table('rooms')->where('type_id', '2')->get();
        return view('apartment.index', compact('rooms'));
    }

    public function show($id){
        $room = DB::table('rooms')->where('id', $id)->get()->first();
        $photos = Photo::where('room_id', $id)->get();
        return view('apartment.apartment_detail', compact('room', 'photos'));
    }
}
