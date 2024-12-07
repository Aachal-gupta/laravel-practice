<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;    //put the path of file which is set on controller
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PhotoController;
use App\http\Controllers\TestController;



Route::get('/', function () {    //this is home page
    return view('test');
});

Route::resource('user',UserController::class);
Route::resource('post',PostController::class);

Route::resource('student',StudentController::class);
Route::resource('role',RoleController::class);


Route::resource('client',ClientController::class);
Route::resource('product',ProductController::class);
Route::resource('photo',PhotoController::class);

//json data put
Route::resource('test',TestController::class);









