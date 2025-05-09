<?php

use App\Http\Controllers\BienvenidoController;
use App\Http\Controllers\NotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [BienvenidoController::class,'welcome'])->name('welcome');
Route::get('/nota', [NotaController::class,'index'])->name('nota.index');
Route::get('/nota/crear', [NotaController::class,'create'])->name('nota.create');
Route::post('/nota', [NotaController::class,'store'])->name('nota.store');
Route::get('/nota/{nota}', [NotaController::class,'show'])->name('nota.show');
Route::get('/nota/{nota}/editar', [NotaController::class,'edit'])->name('nota.edit');
Route::put('/nota/{nota}', [NotaController::class,'update'])->name('nota.update');
Route::delete('/nota/{nota}', [NotaController::class,'destroy'])->name('nota.destroy');