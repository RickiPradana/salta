<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    visitor()->visit();
    return view('index');
});


