<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::paginate(15);
        return view('admin.room.index',compact('rooms'));
    }

    public function create()
    {
        return view('admin.room.create');
    }

    public function store(Request $request)
    {
        $room = new Room();
        $room->fill($request->all());
        $room->save();
        return redirect('/admin/room')->with([
            'message' => 'Tạo thành công',
        ]);
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('admin.room.edit',compact('room'));
    }

    public function update(Request $request,$id)
    {
        $room = Room::findOrFail($id);
        $room->fill($request->all());
        $room->save();
        return redirect('/admin/room')->with([
            'message' => 'Cập nhật thành công',
        ]);
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect('/admin/room')->with([
            'message' => 'Đã xóa',
        ]);
    }
}