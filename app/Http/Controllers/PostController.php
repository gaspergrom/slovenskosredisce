<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    public function store(PostRequest $request)
    {
        $data = $request->all();
        $this->validate($data, [
            'image' => 'required|file|image'
        ]);
        $path = $request->file('image')->store('posts', [ 'disk' => 'public' ]);
        Post::create(array_merge($data, [ 'image' => $path ]));

        return redirect('admin/novice');
    }

    public function edit(Post $novice)
    {
        return view('admin.posts.edit')->with([ 'post' => $novice->toArray() ]);
    }

    public function update(Post $novice, PostRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $this->validate($data, [
                'image' => 'file|image|required'
            ]);
            Storage::delete('public/' . $novice->image);
            $path = $request->file('image')->store('posts', [ 'disk' => 'public' ]);
            $data = array_merge($data, [ 'image' => $path ]);
        }

        $novice->update($data);

        return redirect('admin/novice');
    }

    public function destroy(Post $novice)
    {
        Storage::delete('public/' . $novice->image);
        $novice->delete();

        return "success";
    }
}
