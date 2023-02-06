<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function showRegisterPage($locale = null){
        return view('auth.register');
    }

    public function register(Request $request){
        $this->validate($request, [
            'first_name' => 'required|string|max:25|regex:/^[a-zA-Z0-9\'\-\s]+$/',
            'last_name' => 'required|string|max:25|regex:/^[a-zA-Z0-9\'\-\s]+$/',
            'email' => 'required|email',
            'role' => 'required|in:1,2',
            'gender' => 'required',
            // 'display_picture' => 'required|image',
            'password' => 'required|confirmed|min:8|regex:/^.*(?=.{1,})(?=.*[0-9]).*$/',
        ]);

        $account = new Account();
        $account->first_name = $request->first_name;
        $account->last_name = $request->last_name;
        $account->email = $request->email;
        $account->role_id = $request->role;
        $account->gender_id = $request->gender;
        $account->display_picture_link = '/test';
        $account->password = bcrypt($request->password);
        $account->save();
        
        return redirect('/'.app()->getLocale());
    }

    public function showLoginPage(){
        return view('auth.login');
    }

    public function login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)){
            return redirect('/'.app()->getLocale());
        }
        return back()->withErrors(
            ['authError' => "Wrong email or password. Please try again!"]
        );
    }

    public function logout(){
        Auth::logout();
        return redirect('/'.app()->getLocale());
    }

    public function showProfile(){
        return view('profile');
    }

    public function updateAccount(Request $request){
        $this->validate($request, [
            'first_name' => 'required|string|max:25|regex:/^[a-zA-Z0-9\'\-\s]+$/',
            'last_name' => 'required|string|max:25|regex:/^[a-zA-Z0-9\'\-\s]+$/',
            'email' => 'required|email',
            'role' => 'required|in:1,2',
            'gender' => 'required',
            // 'display_picture' => 'required|image',
            'password' => 'required|confirmed|min:8|regex:/^.*(?=.{1,})(?=.*[0-9]).*$/',
        ]);

        $account = Account::find(Auth::user()->id);
        $account->first_name = $request->first_name;
        $account->last_name = $request->last_name;
        $account->email = $request->email;
        $account->role_id = $request->role;
        $account->gender_id = $request->gender;
        $account->display_picture_link = '/test';
        $account->password = bcrypt($request->password);
        $account->save();

        return back();
    }

    // ----------

    public function showMaintenancePage(){
        return view('account-maintenance');
    }

    public function showUpdateRolePage(){
        return view('update-role');
    }
}
