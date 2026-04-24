<?php

use App\Http\Controllers\MassagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/massages', [MassagesController::class, 'index']);
Route::get('/massages/create', [MassagesController::class, 'create']);


