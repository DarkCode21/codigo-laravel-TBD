<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ContactoController;

Route::view('/','home')->name('home');

Route::view('nosotros','nosotros')->name('nosotros');

Route::resource('servicios',ServiciosController::class);
Route::resource('personas', PersonaController::class);

Route::view('contacto','contacto')->name('contacto');
Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');