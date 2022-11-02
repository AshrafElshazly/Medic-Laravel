<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\web\{HomeController,AboutController,ContactController,
    GalleryController,ServiceController,AppointmentController, FeedbackController, BookingController};
use App\Http\Controllers\web\Auth\AuthSessionController;
use App\Http\Controllers\web\Auth\RegisteredUserController;


/* Auth */
Route::middleware('guest:client')->group(function () {

    
    Route::get('login', [AuthSessionController::class, 'create'])->name('login');
    
    Route::post('login', [AuthSessionController::class, 'store']);
});
Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);
/* Auth */

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/about-us',[AboutController::class,'index'])->name('about');

Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');

Route::get('/service',[ServiceController::class,'index'])->name('services');

Route::controller(ContactController::class)->prefix('contact-us')->name('contact.')->group(function () {
    Route::get('/','index')->name('index');
    Route::post('/store','store')->name('store');
});

Route::middleware('clientAuth:client')->group(function () {

    Route::post('logout', [AuthSessionController::class, 'destroy'])->name('logout');

    Route::controller(AppointmentController::class)->prefix('appointment')->name('appointment.')->group(function () {
        Route::get('/','index')->name('index');
        Route::post('/store','store')->name('store');
        Route::get('/getDoctors/{id}','getDoctors')->name('getDoctor');
    });
    
    Route::controller(FeedbackController::class)->prefix('feedback')->name('feedback.')->group(function () {
        Route::get('/','index')->name('index');
        Route::post('/store','store')->name('store');
    });
    
    Route::get('/booking',[BookingController::class,'index']);
});
