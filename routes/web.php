<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\registerController;
use App\Http\Controllers\auth\dashboardController;
use App\Http\Controllers\auth\logoutController;


Route::get('login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('login', [loginController::class, 'login'])->name('login');

Route::get('register', [registerController::class, 'showRegisterForm']);
Route::post('register', [registerController::class, 'register']);



Route::get('logout', [logoutController::class, 'index']);

Route::get('/dash   ', [dashboardController::class, 'showDashboard']);


Route::view('/', 'home');
