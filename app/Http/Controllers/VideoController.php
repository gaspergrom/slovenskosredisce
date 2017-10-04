<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Video;
use FFMpeg\FFMpeg;
use FFMpeg\Coordinate;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{

    protected $ffmpeg;

    public function __construct()
    {
        $this->ffmpeg = $ffmpeg = FFMpeg::create([
            'ffmpeg.binaries'  => config('thumbnail.binaries.path.ffmpeg'),
            'ffprobe.binaries' => config('thumbnail.binaries.path.ffprobe'),
            'timeout'          => config('thumbnail.binaries.path.timeout'),
            'ffmpeg.threads'   => config('thumbnail.binaries.path.threads'),
        ]);

        $this->middleware('auth');
    }

    public function index()
    {
        $videos = Video::all();

        return view('admin.videos.index', compact('videos'));
    }

    public function store(VideoRequest $request)
    {
        $this->validate($request, [
            'video' => 'required|file|mimes:mp4,ogx,oga,ogv,ogg,webm'
        ]);
        /*$this->validate($request, [
            'image' => 'required|file|image'
        ]);

        $image = $request->file('image')->store('videos/images', [ 'disk' => 'public' ]);*/
        $video_path = $request->file('video')->store('videos', ['disk' => 'public']);
        $this->makeThumbnail($video_path, $time = time());

        Video::create(['path' => $video_path, 'name' => $request->name, 'image' => "thumbnails/{$time}.jpg"]);

        return redirect('/admin/videoposnetki');
    }

    public function edit(Video $videoposnetki)
    {
        return view('admin.videos.edit')->with(['video' => $videoposnetki->toArray()]);
    }

    public function update(Video $videoposnetki, VideoRequest $request)
    {
        $data = $request->all(['name']);
        /*if ( $request->hasFile('image') ) {
            $this->validate($request, [
                'image' => 'required|file|image'
            ]);

            $data['image'] = $request->file('image')->store('videos/images', [ 'disk' => 'public' ]);
        }*/
        if ($request->hasFile('video')) {
            $data['path'] = $request->file('video')->store('videos', ['disk' => 'public']);
            $this->makeThumbnail($data['path'], $time = time());

            $data['image'] = "thumbnails/{$time}.jpg";
            Storage::delete('public/' . $videoposnetki->path);
            Storage::delete('public/' . $videoposnetki->image);
        }
        $videoposnetki->update($data);

        return redirect('/admin/videoposnetki');
    }

    public function destroy(Video $videoposnetki)
    {
        Storage::delete('public/' . $videoposnetki->path);
        Storage::delete('public/' . $videoposnetki->image);
        $videoposnetki->delete();

        return "success";
    }

    protected function makeThumbnail($video_path, $time)
    {
        $img_name = "{$time}.jpg";
        $img_path = storage_path("app/public/thumbnails");

        $video        = $this->ffmpeg->open(storage_path('app/public/' . $video_path));
        $result_image = $img_path . '/' . $img_name;

        $video->filters()->resize(new Coordinate\Dimension(config('thumbnail.dimensions.height'),
            config('thumbnail.dimensions.width')))->synchronize();
        $video->frame(Coordinate\TimeCode::fromSeconds(4))->save($result_image);
    }
}
