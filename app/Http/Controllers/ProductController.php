<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Photo;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with("photo")->find(1);
        return $product;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = Product::create([
            'title' => 'news title  one',
            'description' => 'this is from product controller file '
        ]);

        $product->photo()->create([   //photo is a function define in model 
            'url'=>'images/post.jpg'
        ]);

        // in photo table data will be go from client as well as product model or table
        // both tables data contain in photo table  . this is one to one relation polymorphic 
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
