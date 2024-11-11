<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;



//Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');

// Route pour soumettre le formulaire et enregistrer l'animal (requête POST)
//Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');

Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index'); 
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create'); 
Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');

//Route::resource(name: 'animal', controller: \App\Http\Controllers\AnimalController::class);
