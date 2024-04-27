<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\UsersAccess;


// Route::middleware(['auth'])->group(function () {
//     Route::get('/', [SesiController::class, 'index']);
//     Route::post('/', [SesiController::class, 'login']);
// });

Route::get('/', [SesiController::class, 'index'])->middleware(RedirectIfAuthenticated::class)->name('login');
Route::post('/', [SesiController::class, 'login']);

Route::get('/home', function () {
    return redirect('/users');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/users', [AdminController::class, 'index']);
    Route::get('/admin', [AdminController::class, 'admin'])->middleware(UsersAccess::class . ':admin');
    Route::get('/staff-admin', [AdminController::class, 'staffAdmin'])->middleware(UsersAccess::class . ':staff admin');
    Route::get('/logout', [SesiController::class, 'logout']);
});

// Route::get('/admin', [AdminController::class, 'index']);
// Route::get('/logout', [SesiController::class, 'logout']);
