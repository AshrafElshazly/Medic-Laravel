<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{DashboardController,AuthController};
use App\Http\Controllers\web\{HomeController,AboutController,ContactController,
    GalleryController,ServicesController,AppointmentController, FeedbackController, BookingController};



//Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
    });
    Route::get('/login',[AuthController::class,'index'])->name('loginPage');
    Route::post('/login',[AuthController::class,'login'])->name('login');
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});


//Web Routes
Route::get('/',HomeController::class);

Route::get('/about-us',AboutController::class);

Route::get('/gallery',GalleryController::class);

Route::get('/services',ServicesController::class);

Route::controller(FeedbackController::class)->prefix('feedback')->group(function () {
    Route::get('/','index');
    Route::post('/store','store');
});

Route::controller(AppointmentController::class)->prefix('appointment')->group(function () {
    Route::get('/','index');
    Route::post('/store','store');
    Route::get('/getDoctors/{id}','getDoctors')->name('getDoctors');
});

Route::controller(ContactController::class)->prefix('contact-us')->group(function () {
    Route::get('/','index');
    Route::post('/store','store');
});


Route::get('/booking',[BookingController::class,'index']);
