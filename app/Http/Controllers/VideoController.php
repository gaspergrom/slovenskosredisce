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
        $this->validate($request, [
            'image' => 'required|file|image'
        ]);

        $image = $request->file('image')->store('videos/images', [ 'disk' => 'public' ]);
        $video = $request->file('video')->store('videos', [ 'disk' => 'public' ]);

        Video::create([ 'path' => $video, 'image' => $image ]);
    }

    public function edit(Video $video)
    {

    }

    public function update(Video $video, VideoRequest $request)
    {
        $data = [];
        if ( $request->hasFile('image') ) {
            $this->validate($request, [
                'image' => 'required|file|image'
            ]);

            $data['image'] = $request->file('image')->store('videos/images', [ 'disk' => 'public' ]);
        }
        $data['path'] = $request->file('video')->store('videos', [ 'disk' => 'public' ]);
        $video->update($data);
    }

    public function destroy(Video $video)
    {
        $video->delete();
    }
}