<?php

use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SesiController::class, 'index']);
