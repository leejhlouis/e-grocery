<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function showProfile(){
        return view('profile');
    }

    public function showMaintenancePage(){
        return view('account-maintenance');
    }

    public function showUpdateRolePage(){
        return view('update-role');
    }
}
