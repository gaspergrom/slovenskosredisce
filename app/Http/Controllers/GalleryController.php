<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\GalleryRequest;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $galleries = Gallery::all();

        return view('admin.gallery.index', compact('galleries'));
    }

    public function store(GalleryRequest $request)
    {
        $gallery = Gallery::create($request->except([ 'images' ]));

        foreach ($request->images as $image) {
            $path = $image->store('galleries/' . $gallery->id, [ 'disk' => 'public' ]);
            $gallery->images()->create([ 'path' => $path ]);
        }

        return redirect('admin/galerija');
    }

    public function edit(Gallery $galerija)
    {
        return view('admin.gallery.edit')->with([ 'gallery' => $galerija->toArray(), 'images' => $galerija->images ]);
    }

    public function update(Gallery $galerija, GalleryRequest $request)
    {
        $galerija->update($request->except([ 'images' ]));

        foreach ($request->images as $image) {
            $path = $image->store('galleries/' . $galerija->id, [ 'disk' => 'public' ]);
            $galerija->images()->create([ 'path' => $path ]);
        }

        return redirect('admin/galerija');
    }

    public function destroy(Gallery $galerija)
    {
        Storage::deleteDirectory("public/galleries/" . $galerija->id);
        $galerija->delete();

        return "success";
    }

    public function deleteImage(Image $image)
    {
        Storage::delete("public/" . $image->path);
        $image->delete();

        return "success";
    }
}
