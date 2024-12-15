<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $user = User::with('posts')->find(1);  // Find user with id 1 and load related posts
    return $user;
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {     // http://localhost:8000/post/create
        // both are work as a simultaneously
        $user = User::find(4)->delete(); // user id 1 will be deleted 
         // and after that in post table same id of post or data will be deleted  and for that function
         //defined in a model whivh is auto function evoked
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
