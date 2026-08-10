<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CitaController;

Route::get('/', function () {
    return redirect()->route('servicios.index');
});

Route::get('/servicios', [ServicioController::class, 'index'])->name('servicios.index');
Route::resource('citas', CitaController::class);