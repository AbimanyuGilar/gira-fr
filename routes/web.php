<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login/submit', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register/submit', [AuthController::class, 'register'])->name('register.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware('auth')->group(function () {
    Route::resource('/home', TransactionController::class);
});
