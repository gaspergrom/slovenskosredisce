<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
    }

    public function show(Post $post)
    {

    }

    public function create()
    {

    }

    public function store(PostRequest $request)
    {
        $data = $request->all();
        Validator::make($data, [
            'image' => 'required|file|image'
        ]);
        $path = $request->file('image')->store('public/posts');
        Post::create(array_merge($data, [ 'image' => $path ]));
    }

    public function edit(Post $post)
    {

    }

    public function update(Post $post, PostRequest $request)
    {
        $data = $request->all();

        if ( $request->hasFile('image') ) {
            Validator::make($data, [
                'image' => 'file|image|required'
            ]);
            $path = $request->file('image')->store('public/posts');
            $data = array_merge($data, [ 'image' => $path ]);
        }

        $post->update($data);
    }

    public function destroy(Post $post)
    {
        $post->delete();
    }
}
