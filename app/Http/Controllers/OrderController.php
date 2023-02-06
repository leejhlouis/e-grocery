<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function showCartPage(){
        $cart = Order::all();
        return view('cart', ["cart" => $cart]);
    }

    public function addToCart($id){
        $item = Item::find($id);

        $order = new Order();
        $order->account_id = Auth::user()->id;
        $order->item_id = $item->id;
        $order->price = $item->price;
        $order->save();

        return redirect()->to(app()->getLocale()."/cart");
    }

    public function deleteFromCart($id){
        $cart = Order::find($id);

        if ($cart){
            $cart->delete();
        }
        
        return redirect()->to(app()->getLocale()."/cart");
    }
}
