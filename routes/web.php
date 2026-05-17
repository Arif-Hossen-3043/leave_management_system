<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Auth;
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/register', [Auth::class, 'register'])->name('register');
Route::post('/register-user', [Auth::class, 'registerUser'])->name('register-user');
Route::get('/login', [Auth::class, 'Login'])->name('login');



// Employee Dashboard Route
Route::get('/employee/dashboard', [App\Http\Controllers\EmployeeController::class, 'dashboard'])->name('employee.dashboard');
Route::get('/employee/request', [App\Http\Controllers\EmployeeController::class, 'request'])->name('employee.request');
Route::post('/employee/request', [App\Http\Controllers\EmployeeController::class, 'store'])
    ->name('employee.store');