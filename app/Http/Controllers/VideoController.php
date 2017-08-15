<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Video;

class VideoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $videos = Video::all();
    }

    public function show(Video $video)
    {

    }

    public function create()
    {

    }

    public function store(VideoRequest $request)
    {
        Validator::make($request, [
            'image' => 'required|file|image'
        ]);

        $image = $request->file('image')->store('public/videos/images');
        $video = $request->file('video')->store('public/videos');

        Video::create([ 'path' => $video, 'image' => $image ]);
    }

    public function edit(Video $video)
    {

    }

    public function update(Video $video, VideoRequest $request)
    {
        $data = [];
        if ( $request->hasFile('image') ) {
            Validator::make($request, [
                'image' => 'required|file|image'
            ]);

            $data['image'] = $request->file('image')->store('public/videos/images');
        }
        $data['path'] = $request->file('video')->store('public/videos');
        $video->update($data);
    }

    public function destroy(Video $video)
    {
        $video->delete();
    }
}
