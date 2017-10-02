<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $videos = Video::all();

        return view('admin.videos.index', compact('videos'));
    }

    public function store(VideoRequest $request)
    {
        /*$this->validate($request, [
            'image' => 'required|file|image'
        ]);

        $image = $request->file('image')->store('videos/images', [ 'disk' => 'public' ]);*/
        $video = $request->file('video')->store('videos', ['disk' => 'public']);

        Video::create(['path' => $video]);

        return redirect('/admin/videoposnetki');
    }

    public function update(Video $videoposnetki, VideoRequest $request)
    {
        $data = [];
        /*if ( $request->hasFile('image') ) {
            $this->validate($request, [
                'image' => 'required|file|image'
            ]);

            $data['image'] = $request->file('image')->store('videos/images', [ 'disk' => 'public' ]);
        }*/
        $data['path'] = $request->file('video')->store('videos', ['disk' => 'public']);
        $videoposnetki->update($data);

        return redirect('/admin/videoposnetki');
    }

    public function destroy(Video $videoposnetki)
    {
        Storage::delete('public/' . $videoposnetki->path);
        $videoposnetki->delete();

        return "success";
    }
}
