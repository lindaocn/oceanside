<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentalController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('rentals')->name('rentals.')->group(function () {
    // show
    Route::get('show/{id}', [RentalController::class, 'show'])->name('show');
    Route::get('list', [RentalController::class, 'list_all'])->name('list');
});

