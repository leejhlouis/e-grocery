<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    public function redirectToIndex(){
        return redirect()->to('/en');
    }

    public function index(){
        return view('index');
    }

    public function home(){
        $items = Item::paginate(10);
        return view('home', ["items" => $items]);
    }

    public function details($locale, $id){
        $item = Item::find($id);
        
        if (!$item){
            abort(404);
        }

        return view('details', ["item" => $item]);
    }
}
