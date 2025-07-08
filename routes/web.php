<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about-us');
Route::get('/portofolio', [HomeController::class, 'portofolio'])->name('porto');
Route::get('/service', [HomeController::class, 'dokumentasi'])->name('dokumentasi');

Route::get('/tracking', [BookingController::class, 'trackingForm'])->name('tracking.form');
Route::get('/tracking/search', [BookingController::class, 'searchBooking'])->name('tracking.search');

Route::get('/booking/{layanan}', [BookingController::class, 'form'])->name('booking.form');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

