<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [AuthController::class, 'showRegisterPage']);
Route::get('/login', [AuthController::class, 'showLoginPage']);

Route::get('/', [ItemController::class, 'index']);
Route::get('/products/{id}', [ItemController::class, 'details']);
Route::get('/success', function(){
    return view('success');
});


Route::get('/cart', [CartController::class, 'showCartPage']);
Route::get('/profile', [AccountController::class, 'showProfile']);
Route::get('/account-maintenance', [AccountController::class, 'showMaintenancePage']);
Route::get('/update-role', [AccountController::class, 'showUpdateRolePage']);

