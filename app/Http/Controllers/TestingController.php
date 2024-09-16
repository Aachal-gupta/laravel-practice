<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// this file is created by on terminal  ->  php artisan make:controller TestingController --invokable

class TestingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()    // it is same as constructor, do not need to call, it occure automatically/by default
    {
        return view('demo');            //we can make our own function here
    }
}

// we can watch route name and their method/function by this cmmand on terminal -->php artisan route:list --except-vendor
