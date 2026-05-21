<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\EmployeeController;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/register', [UserAuth::class, 'register'])->name('register');
    Route::post('/register-user', [UserAuth::class, 'registerUser'])->name('register-user');

    Route::get('/login', [UserAuth::class, 'login'])->name('login');
    Route::post('/login', [UserAuth::class, 'userLogin'])->name('login-user');
});

Route::middleware('auth')->group(function () {
    Route::get('/employee/dashboard', function () {
        return view('employee.dashboard');
    })->name('employee.dashboard');

    Route::get('/employee/request', [EmployeeController::class, 'request'])->name('employee.request');

    Route::post('/employee/request', [EmployeeController::class, 'store'])->name('employee.store');

    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    })->name('logout');
});