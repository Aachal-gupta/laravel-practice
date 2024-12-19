<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;  // add this for string 

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class PostController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  //http://localhost:8000/post
        // $user = Post::with('user')->get();
        // return $user;


        $post = Post::withWhereHas("user", function($query){
            $query->active();
        })->whereStatus(1)->get();
        return $post;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post_title="This is another Testing by Observer file ";       //http://localhost:8000/post/create
        // $post_slug=str::slug($post_title,"-");  // this code i have write in observer file 
        // echo $post_slug;
        Post::create([
            'title'=> $post_title ,
            'description'=>"There is observer file who created the slug ",
            // 'slug'=>$post_slug,
            'user_id'=>2,
        ]);
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
