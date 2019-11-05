<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CustomerServiceController extends Controller
{
    public function index($id)
    {
        $customer = User::find($id);

        return view('customer.index', compact('customer'));
    }
}
