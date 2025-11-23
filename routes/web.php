<?php

use App\Http\Controllers\TrackingController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    Route::prefix('track')->group(function() {
        Route::get('/', [TrackingController::class, 'index'])->name('track');
    });
    
});


Route::prefix('access')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('access');
    Route::post('/', [UserController::class, 'proceedLogin'])->name('proceed_login');
    Route::post('/logout', [UserController::class, 'proceedLogout'])->name('proceed_logout');
});
