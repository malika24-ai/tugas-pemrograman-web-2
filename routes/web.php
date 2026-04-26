<?php

use App\Http\Controllers\MassagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MassagesController::class, 'index']);


Route::get('/massages', [MassagesController::class, 'index'])->name('massages.index');
Route::get('/massages/create', [MassagesController::class, 'create'])->name('massages.create');
Route::post('/massages/store', [MassagesController::class, 'store'])->name('massages.store');
Route::get('/massages/{massages}/edit', [MassagesController::class, 'edit'])->name('massages.edit');
Route::put('/massages/{massages}', [MassagesController::class, 'update'])->name('massages.update');


