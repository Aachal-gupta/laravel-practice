<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {    //this is home page
    return view('welcome');
});

Route::get('/demo', function () {
    return view('about');
});


