<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// authentification routes
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function (){
    Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
    Route::get('/index', [AuthController::class, 'index'])->name('index');

    Route::get('/', function () {
        return view('welcome');
    });
    
});

Route::middleware('auth')->controller(AuthController::class)->group(function (){
    Route::get('/home', [AuthController::class, 'home'])->name('home');

});