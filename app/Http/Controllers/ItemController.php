<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return view('home');
    }

    public function details($id){
        return view('details');
    }
}
