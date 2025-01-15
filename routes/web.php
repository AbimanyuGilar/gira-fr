<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login-form', function () {
    return view('auth.login');
});

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
