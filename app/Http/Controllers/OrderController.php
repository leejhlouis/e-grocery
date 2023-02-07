<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function showCartPage(){
        $cart = Order::where('account_id', '=', Auth::user()->id)->where('checked_out','=', '0')->get();
        return view('cart', ["cart" => $cart]);
    }

    public function addToCart($locale, $id){
        $item = Item::find($id);

        $order = new Order();
        $order->account_id = Auth::user()->id;
        $order->item_id = $item->id;
        $order->price = $item->price;
        $order->save();

        return redirect()->to(app()->getLocale()."/cart");
    }

    public function deleteFromCart($locale, $id){
        $cart = Order::find($id);

        if ($cart){
            $cart->delete();
        }
        
        return redirect()->to(app()->getLocale()."/cart");
    }

    public function checkout(){
        $cart = Order::where('account_id', '=', Auth::user()->id)->where('checked_out','=', '0')->get();

        foreach($cart as $item){
            $item->checked_out = true;
            $item->save();
        }

        return view('status.success');
    }
}
