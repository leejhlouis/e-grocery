<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ItemController extends Controller
{
    public function redirectToIndex(){
        return redirect()->to('/en');
    }

    public function index(){
        $items = Item::paginate(10);
        return view('home', ["items" => $items]);
    }

    public function details($locale, $id){
        $item = Item::find($id);
        
        return view('details', ["item" => $item]);
    }
}
