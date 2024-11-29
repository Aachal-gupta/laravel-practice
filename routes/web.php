<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;    //put the path of file which is set on controller
use App\Http\Controllers\PostController;


Route::get('/', function () {    //this is home page
    return view('test');
});

Route::resource('user',UserController::class);
Route::resource('post',PostController::class);







