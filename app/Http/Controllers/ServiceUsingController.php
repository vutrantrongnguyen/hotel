<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceUsingController extends Controller
{
    public function addServiceToUser(Request $request)
    {
        $order = new OrderService();
        $order->service_id = $request->input('service_id');
        $order->user_id = Auth::user()->id;
        $order->quantity = $request->input('quantity');
        $order->save();
    }
}
