<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {    //this is home page
    return view('welcome');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/pest',function(){
    return view('pest');
});

Route::get('/test',function(){
    return view('test');
});

