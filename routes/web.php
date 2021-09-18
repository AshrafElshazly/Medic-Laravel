<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\web\{HomeController,AboutController,ContactController,
    GalleryController,ServicesController,AppointmentController};

Route::get('welcome', function () {
    return view('welcome');
});

//Admin Routes
/****************************************************************************/
Route::get("/dashboard",[DashboardController::class,"index"]);
/****************************************************************************/

//Web Routes
/****************************************************************************/
Route::get("/",[HomeController::class,"index"]);

Route::get("/about-us",[AboutController::class,"index"]);

Route::get("/gallery",[GalleryController::class,"index"]);

Route::get("/services",[ServicesController::class,"index"]);

Route::get("/appointment",[AppointmentController::class,"index"]);
Route::post("/appointment/store",[AppointmentController::class,"store"]);
Route::get("/appointment/getDoctors/{id}",[AppointmentController::class,"getDoctors"])->name("getDoctors");

Route::get("/contact-us",[ContactController::class,"index"]);
Route::post("/contact-us/store",[ContactController::class,"store"]);
/****************************************************************************/