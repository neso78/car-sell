<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class,'index'])->name('home');
Route::get('signup', [RegisterController::class,'signup'])->name('signup');
Route::get('login', [LoginController::class,'login'])->name('login');
