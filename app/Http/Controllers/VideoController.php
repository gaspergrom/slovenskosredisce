<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Lakshmaji\Thumbnail\Facade\Thumbnail;

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

        $img_name = time() . ".jpg";
        $img_path = storage_path("app/public/thumbnails");
        $img      = "thumbnails/" . $img_name;

        Thumbnail::getThumbnail($video, $img_path, $img_name, 2);

        Video::create(['path' => $video, 'name' => $request->name, 'image' => $img]);

        return redirect('/admin/videoposnetki');
    }

    public function edit(Video $videoposnetki)
    {
        return view('admin.videos.edit')->with(['video' => $videoposnetki->toArray()]);
    }

    public function update(Video $videoposnetki, VideoRequest $request)
    {
        $data = $request->all();
        /*if ( $request->hasFile('image') ) {
            $this->validate($request, [
                'image' => 'required|file|image'
            ]);

            $data['image'] = $request->file('image')->store('videos/images', [ 'disk' => 'public' ]);
        }*/
        if ($request->hasFile('video')) {
            $data['path'] = $request->file('video')->store('videos', ['disk' => 'public']);
            $img_name     = time() . ".jpg";
            $img_path     = storage_path("app/public/thumbnails");
            $img          = "thumbnails/" . $img_name;

            Thumbnail::getThumbnail($data['path'], $img_path, $img_name, 2);
            $data['image'] = $img;
        }
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
