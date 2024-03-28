<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    const CART_KEY = 'CART';
    public function checkOut(Request $request){
        $total = 0;
        if ($request->session()->exists(self::CART_KEY)){
            $carts = $request->session()->get(self::CART_KEY);
            foreach ($carts as $cart){
                $total += $cart['product']['price']* $cart['quantity'];
            }
        }
        return view('fe.checkout', compact('total'));
    }

    public function makeOrder(Request $request){
        $data = $request->all();
        dd($data);
    }
}
