<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentalController;

Route::get('/aboutus', function () {
    return view('rentals.aboutus');


})->name('aboutus');

Route::prefix('rentals')->name('rentals.')->group(function () {
    // show
    Route::get('show/{id}', [RentalController::class, 'show'])->name('show');
    // create
    Route::get('create', [RentalController::class, 'create'])->name('create');
    // list all
    Route::get('list', [RentalController::class, 'list_all'])->name('list');
     // update
    Route::get('delete/{id}', [RentalController::class, 'delete'])->name('delete');
    // Store
    Route::POST('store', [RentalController::class, 'store'])->name('store');
    // Edit
    Route::get('edit/{id}', [RentalController::class, 'edit'])->name('edit');
    // delete
    Route::POST('update/{id}', [RentalController::class, 'update'])->name('update');
});

Route::get('/dashboard', [RentalController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
