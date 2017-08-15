<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\GalleryRequest;
use App\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $galleries = Gallery::all();
    }

    public function show(Gallery $gallery)
    {

    }

    public function create()
    {

    }

    public function store(GalleryRequest $request)
    {
        $gallery = Gallery::create($request->all());

        foreach ( $request->images as $image ) {
            $path = $image->store('public/galleries/' . $gallery->id);
            $gallery->images()->create([ 'path' => $path ]);
        }
    }

    public function edit(Gallery $gallery)
    {

    }

    public function update(Gallery $gallery, GalleryRequest $request)
    {
        $gallery->update($request->all());

        foreach ( $request->images as $image ) {
            $path = $image->store('public/galleries/' . $gallery->id);
            $gallery->images()->create([ 'path' => $path ]);
        }
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
    }

    public function deleteImage(Image $image)
    {
        $image->delete();
    }
}
