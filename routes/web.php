<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ServiciosController;

Route::view('/','home')->name('home');

Route::view('nosotros','nosotros')->name('nosotros');

Route::resource('servicios',ServiciosController::class)
        ->names('servicios')
        ;

Route::resource('personas', PersonaController::class)
        ->names('personas')
        ->middleware('auth');

Route::view('contacto','contacto')->name('contacto');
Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');


// Auth::routes();
Auth::routes(['register' => false]);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
