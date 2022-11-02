<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{AdminHomeController, AppointmentController as AdminAppointmentController, AuthController};

Route::prefix('admin')->name('admin.')->group(function () {
    
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login','index')->name('loginPage');
        Route::post('/login','login')->name('login');
        Route::post('/logout','logout')->name('logout');    
    });

    Route::middleware(['auth:web'])->group(function () {
        Route::get('/',[AdminHomeController::class, 'index'])->name('dashboard');   
        Route::get('/appointment',[AdminAppointmentController::class,'index'])->name('appointments');
    }); 
});