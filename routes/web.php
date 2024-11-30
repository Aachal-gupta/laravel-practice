<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;    //put the path of file which is set on controller
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RoleController;


Route::get('/', function () {    //this is home page
    return view('test');
});

Route::resource('user',UserController::class);
Route::resource('post',PostController::class);

Route::resource('student',StudentController::class);
Route::resource('role',RoleController::class);









