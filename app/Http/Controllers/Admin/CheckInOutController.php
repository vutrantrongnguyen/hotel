<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckInOutController extends Controller
{
    public function checkIn()
    {
        return view('admin.checkin.index');
    }
    public function checkOut()
    {
        return view('admin.checkout.index');
    }

    public function commitCheckIn(Request $request)
    {
        $order = Order::find($request->input('order_id'));
        if ($order != null)
        {
            $order->status = 1;
            $order->save();
            return redirect('/admin/checkin');
        }
       else
       {
           return Redirect::back()->withErrors(['Order ID '.$request->input('order_id').' chưa được tạo']);

       }
    }
    public function commitCheckOut(Request $request)
    {
        $order = Order::find($request->input('order_id'));
        if ($order->status == 1)
        {
            $order->status = 2;
            $order->save();
            return redirect('/admin/checkout');
        }
        else
        {
            return Redirect::back()->withErrors(['Order ID '.$request->input('order_id').' chưa được check in']);
        }
    }


    public function getOrderInfo(Request $request)
    {
        $order = Order::find($request->input('order_id'));
        if ($order != null && $order->status == 0)
        {
            $result = [];
            $result['order'] = $order;
            $result['user'] = $order->user;
            $result['room'] = $order->room;
            return $result;
        }
        return null;
    }

    public function getCheckoutOrderInfo(Request $request)
    {
        $order = Order::find($request->input('order_id'));


        if ($order != null && $order->status == 1)
        {
            $begin = Carbon::createFromFormat('Y-m-d',$order->begin);
            $end = Carbon::createFromFormat('Y-m-d',$order->end);
            $days = $end->diffInDays($begin);
            $price = $days * $order->room->price;
            $result = [];
            $result['order'] = $order;
            $result['user'] = $order->user;
            $result['room'] = $order->room;
            $result['price'] = number_format (  $price ,  $decimals = 0 , $dec_point = "." , $thousands_sep = "," );
            return $result;
        }
        return null;
    }
}
