<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/massages', function () {
    return view('massages.index', ['title' => 'Massages']);
});
Route::get('/massages/create', function () {
    return view('massages.create', ['title' => 'Create Massage']);
});

