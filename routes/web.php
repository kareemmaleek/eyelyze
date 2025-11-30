<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\TrackingController;


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    Route::prefix('track')->group(function() {
        Route::get('/', [TrackingController::class, 'index'])->name('track');
    });

    Route::prefix('users')->group(function(){
        Route::get('/', [UserController::class, 'indexUsers'])->name('users');
        Route::post('/', [UserController::class, 'createUser'])->name('users.post');
        Route::put('/{uid}', [UserController::class, 'updateUser']);
    });

    Route::prefix('audit')->group(function() {
        Route::get('/', [AuditController::class, 'index'])->name('audit');
    });
    
});


Route::prefix('access')->group(function () {
    Route::get('/', [UserController::class, 'indexAccess'])->name('access');
    Route::post('/', [UserController::class, 'proceedLogin'])->name('proceed_login');
    Route::post('/logout', [UserController::class, 'proceedLogout'])->name('proceed_logout');
});
