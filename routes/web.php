<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\web\{HomeController,AboutController,ContactController,
    GalleryController,ServicesController,AppointmentController, FeedbackController, BookingController};

Route::get('welcome', function () {
    return view('welcome');
});

//Admin Routes
/****************************************************************************/
Route::get("/dashboard",DashboardController::class);
/****************************************************************************/

//Web Routes
/****************************************************************************/
Route::get("/",HomeController::class);

Route::get("/about-us",AboutController::class);

Route::get("/gallery",GalleryController::class);

Route::get("/services",ServicesController::class);

Route::get("/appointment",AppointmentController::class);
Route::post("/appointment/store",[AppointmentController::class,"store"]);
Route::get("/appointment/getDoctors/{id}",[AppointmentController::class,"getDoctors"])->name("getDoctors");

Route::get("/booking",BookingController::class);

Route::get("/contact-us",ContactController::class);
Route::post("/contact-us/store",[ContactController::class,"store"]);

Route::get("/feedback",FeedbackController::class);
Route::post("/feedback/store",[FeedbackController::class,"store"]);
/****************************************************************************/