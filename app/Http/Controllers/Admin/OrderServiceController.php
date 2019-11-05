<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderServiceController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orderservice.index', compact('orders'));
    }
}
