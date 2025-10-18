<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/service', [ServiceController::class, 'index']);