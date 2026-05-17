<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return redirect()->route('packages.index');
});

Route::resource('packages', PackageController::class);
// Accept GET on /bookings so visiting the URL doesn't throw a 405.
Route::get('bookings', function () {
    return redirect()->route('packages.index');
});

Route::post('bookings', [BookingController::class, 'store'])->name('bookings.store');
