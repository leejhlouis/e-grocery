<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterPage(){
        return view('auth.register');
    }

    public function showLoginPage(){
        return view('auth.login');
    }
}
