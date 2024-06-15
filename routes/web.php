<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Servicios2Controller;
use App\Http\Controllers\Servicios3Controller;
use App\Http\Controllers\ServiciosController;

use App\Http\Controllers\PersonaController;


$servicios = [
    // ['titulo' => 'Servicio 01'],
    // ['titulo' => 'Servicio 02'],
    // ['titulo' => 'Servicio 03'],
    // ['titulo' => 'Servicio 04'],
    // ['titulo' => 'Servicio 05'],
];


Route::view('/','home')->name('home');


Route::view('nosotros','nosotros')->name('nosotros');
// Route::get('servicios', [Servicios2Controller::class, 'index'])->name('servicios');
Route::get('servicios', [ServiciosController::class, 'index'])->name('servicios');
Route::get('servicios/crear', [ServiciosController::class, 'create'])->name('servicios.create');
Route::post('servicios', [ServiciosController::class, 'store'])->name('servicios.store');
Route::get('servicios/{id}',[ServiciosController::class,'show'])->name('servicios.show');

// Route::resource('servicios', Servicios2Controller::class)->only(['index', 'show']);
// Route::resource('servicios', Servicios2Controller::class)->except(['index', 'show']);
// Route::resource('servicios', Servicios3Controller::class);

Route::get('personas', [PersonaController::class, 'index'])->name('personas.index');
Route::get('personas/crear', [PersonaController::class, 'create'])->name('personas.create');
Route::post('personas', [PersonaController::class, 'store'])->name('personas.store');
Route::get('personas/{nPerCodigo}', [PersonaController::class, 'show'])->name('personas.show');

Route::get('personas/{nPerCodigo}/edit', [PersonaController::class, 'edit'])->name('personas.edit');
Route::put('personas/{nPerCodigo}', [PersonaController::class, 'update'])->name('personas.update');
Route::delete('personas/{nPerCodigo}', [PersonaController::class, 'destroy'])->name('personas.destroy');

Route::view('contacto','contacto')->name('contacto');


