<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


#Route::get('/', function () {
   # return view('welcome');
#});

Route::get('/', [HomeController::class , 'index'])->name('index');

Route::get('/login', [HomeController::class , 'login'])->name('login');

Route::get('/about', [HomeController::class , 'about'])->name('about');
