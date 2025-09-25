<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('rentals')->name('rentals.')->group(function () {
    // show
    Route::get('show/{id}', [RentalController::class, 'show'])->name('show');
});

