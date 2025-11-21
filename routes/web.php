<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});


Route::prefix('access')->group(function(){
    Route::get('/', function() {
        return view('access');
    });
    Route::post('/', [UserController::class, 'proceedLogin'])->name('proceed_login');
});
