<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {    //this is home page
    return view('welcome');
})->name('home');

// if we change the name of file here in route URL then only one time we need to change here 
// now for other page this file name is aboutme but in url it show intro but real name if file is about
     
// route named
Route::get('/intro', function(){
    return view('about');
})->name('aboutme');



Route::get('/pest', function(){
    return view('pest');
})->name('post');