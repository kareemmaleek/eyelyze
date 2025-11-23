<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::prefix('access')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('access');
    Route::post('/', [UserController::class, 'proceedLogin'])->name('proceed_login');
    Route::post('/logout', [UserController::class, 'proceedLogout'])->name('proceed_logout');
});
