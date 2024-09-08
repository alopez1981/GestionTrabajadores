<?php

use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\ExtraController;

Route::get('/', function () {
    return redirect()->route('trabajadores.index');
});

Route::resource('trabajadores', TrabajadorController::class);
Route::resource('centros', CentroController::class);
Route::get('trabajadores/{trabajador}/extras/create', [ExtraController::class, 'create'])->name('extras.create');
Route::post('trabajadores/{trabajador}/extras', [ExtraController::class, 'store'])->name('extras.store');
Route::get('trabajadores/{trabajador}/extras', [ExtraController::class, 'show'])->name('extras.show');
