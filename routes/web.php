<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{AdminHomeController,AuthController};
use App\Http\Controllers\web\{HomeController,AboutController,ContactController,
    GalleryController,ServiceController,AppointmentController, FeedbackController, BookingController};



//Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['auth'])->group(function () {
        Route::get('/',[AdminHomeController::class, 'index'])->name('dashboard');
    });

    Route::controller(AuthController::class)->group(function () {
        Route::get('/login','index')->name('loginPage');
        Route::post('/login','login')->name('login');
        Route::post('/logout','logout')->name('logout');    
    });

});


//Web Routes
Route::get('/',[HomeController::class,'index']);

Route::get('/about-us',[AboutController::class,'index']);

Route::get('/gallery',[GalleryController::class,'index']);

Route::get('/service',[ServiceController::class,'index']);

Route::controller(FeedbackController::class)->prefix('feedback')->group(function () {
    Route::get('/','index');
    Route::post('/store','store');
});

Route::controller(AppointmentController::class)->prefix('appointment')->group(function () {
    Route::get('/','index');
    Route::post('/store','store');
    Route::get('/getDoctors/{id}','getDoctors');
});

Route::controller(ContactController::class)->prefix('contact-us')->group(function () {
    Route::get('/','index');
    Route::post('/store','store');
});

Route::get('/booking',[BookingController::class,'index']);
