<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\SetLocale;
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
Route::prefix('{locale}')->middleware(SetLocale::class)->group(function (){

    Route::group(['middleware' => 'guest'], function(){
        Route::get('/', [ItemController::class, 'index'])->name('index');

        Route::get('/register', [AccountController::class, 'showRegisterPage']);
        Route::post('/register', [AccountController::class, 'register']);

        Route::get('/login', [AccountController::class, 'showLoginPage']);
        Route::post('/login', [AccountController::class, 'login']);
    });

    Route::group(['middleware' => 'auth'], function(){
        Route::get('/home', [ItemController::class, 'home'])->name('home');
        Route::get('/products/{id}', [ItemController::class, 'details']);

        Route::get('/cart', [OrderController::class, 'showCartPage']);
        Route::post('/cart/add/{id}', [OrderController::class, 'addToCart']);
        Route::post('/cart/delete/{id}', [OrderController::class, 'deleteFromCart']);

        Route::post('/checkout', [OrderController::class, 'checkout']);

        Route::get('/profile', [AccountController::class, 'showProfile']);
        Route::post('/profile', [AccountController::class, 'updateAccount']);
        Route::post('/auth/logout', [AccountController::class, 'logout']);
    });

    Route::group(['middleware' => 'admin'], function(){
        Route::get('/accounts/maintenance', [AccountController::class, 'showMaintenancePage']);
        Route::get('/accounts/update/{id}', [AccountController::class, 'showUpdateRolePage']);
        Route::post('/accounts/update/{id}', [AccountController::class, 'updateRole']);
        Route::post('/accounts/delete/{id}', [AccountController::class, 'delete']);
    });

    Route::get('/locale/switch', [LocaleController::class, 'switchLocale']);
});

Route::get('/', [ItemController::class, 'redirectToIndex']);
