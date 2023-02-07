<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function showRegisterPage(){
        return view('auth.register');
    }

    public function register(Request $request){
        $this->validate($request, [
            'first_name' => 'required|string|max:25|regex:/^[a-zA-Z0-9\'\-\s]+$/',
            'last_name' => 'required|string|max:25|regex:/^[a-zA-Z0-9\'\-\s]+$/',
            'email' => 'required|email',
            'role' => 'required|in:1,2',
            'gender' => 'required',
            'display_picture' => 'required|image',
            'password' => 'required|confirmed|min:8|regex:/^.*(?=.{1,})(?=.*[0-9]).*$/',
        ]);

        $displayPicture = $request->file('display_picture');
        $displayPictureFilename = time().'-'.$displayPicture->getClientOriginalName();

        $account = new Account();
        $account->first_name = $request->first_name;
        $account->last_name = $request->last_name;
        $account->email = $request->email;
        $account->role_id = $request->role;
        $account->gender_id = $request->gender;
        $account->display_picture_link = '/storage/pictures/'.$displayPictureFilename;
        Storage::putFileAs('public/pictures/', $displayPicture ,$displayPictureFilename);
        $account->password = bcrypt($request->password);
        $account->save();
        
        Auth::login($account);

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
        return view('status.logout-success');
    }

    public function showProfile(){
        return view('accounts.profile');
    }

    public function updateAccount(Request $request){
        $this->validate($request, [
            'first_name' => 'required|string|max:25|regex:/^[a-zA-Z0-9\'\-\s]+$/',
            'last_name' => 'required|string|max:25|regex:/^[a-zA-Z0-9\'\-\s]+$/',
            'email' => 'required|email|unique:accounts,email',
            'role' => 'required|in:1,2',
            'gender' => 'required',
            'display_picture' => 'required|image',
            'password' => 'required|confirmed|min:8|regex:/^.*(?=.{1,})(?=.*[0-9]).*$/',
        ]);

        $displayPicture = $request->file('display_picture');
        $displayPictureFilename = time().'-'.$displayPicture->getClientOriginalName();

        $account = Account::find(Auth::user()->id);
        $account->first_name = $request->first_name;
        $account->last_name = $request->last_name;
        $account->email = $request->email;
        $account->role_id = $request->role;
        $account->gender_id = $request->gender;
        $account->display_picture_link = '/storage/pictures/'.$displayPictureFilename;
        Storage::putFileAs('public/pictures/', $displayPicture ,$displayPictureFilename);
        $account->password = bcrypt($request->password);
        $account->save();

        return view('status.saved');
    }

    public function showMaintenancePage(){
        $accounts = Account::where('deleted_at', '=', null)->get();
        return view('accounts.maintenance', ['accounts' => $accounts]);
    }

    public function showUpdateRolePage($locale, $id){
        $account = Account::find($id);
        return view('accounts.update-role', ["account" => $account]);
    }

    public function updateRole(Request $request, $locale, $id){
        $this->validate($request, [
            'role' => 'required|in:1,2',
        ]);

        $account = Account::find($id);
        $account->role_id = $request->role;
        $account->save();

        return redirect()->to(app()->getLocale().'/accounts/maintenance');
    }

    public function delete($locale, $id){
        $account = Account::find($id);
        $account->delete();

        return redirect()->back();
    }
}