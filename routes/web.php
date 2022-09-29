<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\web\{HomeController,AboutController,ContactController,
    GalleryController,ServicesController,AppointmentController, FeedbackController, BookingController, NewsController};
use App\Models\News;

Route::get('welcome', function () {
    return view('welcome');
});

//Admin Routes
Route::get('/dashboard',DashboardController::class);

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

Route::get('/news',[NewsController::class,'index']);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
// });