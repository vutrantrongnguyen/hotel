<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use App\Photo;
use App\Room;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    public function getOrder($room_id) {
        $room = DB::table('rooms')->where('id', $room_id)->get()->first();
        $photos = Photo::where('room_id', $room_id)->get();
        return view('order.OrderRoom', compact('room', 'photos'));
    }

        public function order(OrderRequest $request)
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

}
