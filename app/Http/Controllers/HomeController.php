<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use App\Room;
use App\Type;
use DateTime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tab = 1;
        $types = Type::select('id', 'name')->get()->toArray();
        return view('home.index', compact('types', 'tab'));
    }

    public function result(OrderRequest $request)
    {
        //get phong dang co san
        $datein = new DateTime($request->txtDateIn);
        $date_in = date_format($datein, 'Y-m-d');
        $dateout = new DateTime($request->txtDateOut);
        $date_out = date_format($dateout, 'Y-m-d');
        $room_available = Room::select('id', 'type_id', 'name', 'description', 'price', 'available', 'total')
            ->where('available', 1)->where('total', '>=', $request->sltNumber)->where('type_id', $request->sltType)->get()->toArray();
        //get phong da dat nhung out < in nhap
        $room_check_time = array();
        //get list order co out < in nhap
        $list_order_one = Order::where('end', '<', $date_in)->get()->toArray();
        foreach ($list_order_one as $item_list_order) {
            $item_room = Room::where('id', $item_list_order['room_id'])->where('total', '>=', $request->sltNumber)
                ->where('type_id', $request->sltType)->first();
            if ($item_room) {
                array_push($room_check_time, $item_room);
            }
        }
//
//        //get phong da dat nhung in cua order > out dat
        $list_order_two = Order::where('begin', '>', $date_out)->get()->toArray();
        foreach ($list_order_two as $item_list_order) {
            $item_room = Room::where('id', $item_list_order['room_id'])->where('total', '>=', $request->sltNumber)
                ->where('type_id', $request->sltType)->first();
            if ($item_room) {
                array_push($room_check_time, $item_room);
            }
        }
//        echo '<pre>';
//        print_r($room_check_time);
//        echo '</pre>';
        return view('home.result', compact('room_available', 'room_check_time', 'date_in', 'date_out'));
    }

    public function order($id, $date_in, $date_out, $user_id)
    {
        $order = new Order();
        $order->room_id = $id;
        $order->begin = $date_in;
        $order->end = $date_out;
        $order->user_id = $user_id;
        $order->status = 0;
        $order->save();
        $room = Room::find($id)->first();
        $room->available = 0;
        $room->save();
        return redirect()->to('/')->with(['flash_level' => 'success', 'flash_message' => 'Success !! Complete Add Order Room']);
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        function __construct()
        {
//        $this->middleware('auth');
        }
    }
}

