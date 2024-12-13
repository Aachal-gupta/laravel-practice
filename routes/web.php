<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;    // Import the UserController
use App\Http\Controllers\PostController;    // Import the PostController


// Route::get('/', function () {    // Home page route
//     return view('test');
// });

Route::resource('user', UserController::class);  // Resource route for UserController
Route::resource('post', PostController::class);  // Resource route for UserController
