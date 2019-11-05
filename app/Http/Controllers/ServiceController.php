<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Session;
use App\Cart;

class ServiceController extends Controller
{
    //
    public function getIndex()
    {
        $services = Service::all();
        return view('service.index', ['services' => $services]);
    }

    public function getAddToCart(Request $request, $id) {
       
        $service = Service::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($service, $service->id);
       
        $request->session()->put('cart', $cart);
        
        dd($request->session()->get('cart', $cart));
        
        return redirect()->route('service.index');
    }

     public function getCart() {
        
        if (!Session::has('cart')) {
            return view('service.service-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        
        return view('service.service-cart', ['services' => $cart->items, 'totalPrice' => $cart->totalPrice]);
        
    }





}
