<?php

use App\Http\Controllers\Admin\AdminController as AdminAdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\RequestedController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\User\TicketController;
use App\Http\Controllers\User\UserEventController;
use Illuminate\Support\Facades\Route;

// authentification routes
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::middleware('guest')->controller(AuthController::class)->group(function (){
    Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
    Route::get('/index', [AuthController::class, 'index'])->name('index');

    Route::get('/', function () {
        return view('welcome');
    });
    
});


// Route::middleware('user')->controller(AuthController::class)->group(function (){
//     Route::get('/home', [AuthController::class, 'home'])->name('home');

// });

Route::middleware('user')->controller(UserEventController::class)->group(function (){
    Route::get('/home', [UserEventController::class, 'home'])->name('home');
    Route::get('/event/{id}', [UserEventController::class, 'show'])->name('details');
    Route::get('/incomingEvents', [UserEventController::class, 'incomingEvents'])->name('incomingEvents');
    Route::get('/pastEvents', [UserEventController::class, 'pastEvents'])->name('pastEvents');
    Route::get('ticket', [TicketController::class, 'index'])->name('ticket');
    // payment
    Route::post('/checkout/session', [StripeController::class, 'session'])->name('checkout.session');
    Route::get('/payment/success', [StripeController::class, 'success'])->name('payment.success');
    Route::get('/payment/cancel', [StripeController::class, 'cancel'])->name('payment.cancel');
});

Route::middleware('admin')->controller(AdminController::class)->group(function (){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    

    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    Route::post('/requested/{id}/approve', [RequestedController::class, 'approve'])->name('requested.approve');
    Route::post('/requested/{id}/reject', [RequestedController::class, 'reject'])->name('requested.reject');

    Route::resource(('/requested'), RequestedController::class);

    Route::resource(('/categories'), CategoryController::class)->except(['show', 'edit']);
    Route::resource('/events', EventController::class)->except(['show', 'edit']);
    // Route::post('events/test', [EventController::class, 'test'])->name('events.test');

    Route::post('/users/{id}', [UserController::class, 'toggleStatus'])->name('admin.users.toggleStatus');
    

    
});
