<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;    // Import the UserController



Route::resource('user', UserController::class);  // Resource route for UserController

Route::view('/','welcome');
