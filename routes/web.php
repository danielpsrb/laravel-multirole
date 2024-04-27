<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SesiController::class, 'index']);
Route::post('/', [SesiController::class, 'login']);

Route::get('/admin', [AdminController::class, 'index']);
