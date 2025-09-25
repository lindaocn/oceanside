<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentalController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('rentals')->name('rentals.')->group(function () {
    // show
    Route::get('show/{id}', [RentalController::class, 'show'])->name('show');
    // create
    Route::get('create', [RentalController::class, 'create'])->name('create');
    // list all
    Route::get('list', [RentalController::class, 'list_all'])->name('list');
     // update
    Route::get('update/{id}', [RentalController::class, 'update'])->name('update');
    // delete
    Route::get('delete/{id}', [RentalController::class, 'delete'])->name('delete');
    // Store
    Route::POST('store', [RentalController::class, 'store'])->name('store');
    // Edit
    Route::get('edit/{id}', [RentalController::class, 'edit'])->name('edit');
    
});

