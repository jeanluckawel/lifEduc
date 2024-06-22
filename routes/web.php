<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/domaine', function () {
    return view('Pages.domaine');
});
