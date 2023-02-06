<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function redirectToIndex(){
        return redirect()->to('/en');
    }

    public function index(){
        return view('home');
    }

    public function details($id){
        return view('details');
    }
}
