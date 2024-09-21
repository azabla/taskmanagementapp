<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fildes=$request->validate([
            'title' =>'required|max:225',
            'body' =>'required',
        ]);
        
       $post = Post::create($fildes);
       return $post;
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $fildes=$request->validate([
            'title' =>'required|max:225',
            'body' =>'required',
        ]);
        
       $post->update($fildes);
       return $post;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return ["message"=> "the post was deleted"];
    }
}
