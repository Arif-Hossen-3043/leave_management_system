<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/login', [PublicController::class, 'Login'])->name('login');
Route::get('/register', [PublicController::class, 'register'])->name('register');
// Employee Dashboard Route
Route::get('/employee/dashboard', [App\Http\Controllers\EmployeeController::class, 'dashboard'])->name('employee.dashboard');
Route::get('/employee/request', [App\Http\Controllers\EmployeeController::class, 'request'])->name('employee.request');
