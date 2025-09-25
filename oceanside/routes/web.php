<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('rentals')->name('rental.')->group(function () {
    // show
    Route::get('show/{id}', [PokemonController::class, 'show'])->name('show');
});

