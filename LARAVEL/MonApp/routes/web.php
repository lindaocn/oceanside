<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Pokemon;
use App\Http\Controllers\PokemonController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('pokemons')->name('pokemons.')->group(function () {

    Route::get('create', [PokemonController::class, 'create'])->name('create');
    Route::post('store', [PokemonController::class, 'store'])->name('store');
    
    Route::get('list', [PokemonController::class, 'list_all'])->name('list');
    Route::get('show/{id}', [PokemonController::class, 'show'])->name('show');

    Route::get('edit/{id}', [PokemonController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [PokemonController::class, 'update'])->name('update');

    Route::get('delete/{id}', [PokemonController::class, 'delete'])->name('delete');

});