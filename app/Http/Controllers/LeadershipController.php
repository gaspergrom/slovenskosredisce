<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadershipRequest;
use App\Leadership;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class LeadershipController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $leaderships = Leadership::all();

        return view('admin.leadership.index', compact('leaderships'));
    }

    public function store(LeadershipRequest $request)
    {
        $this->validate($request, [
            'image' => 'required|file|image'
        ]);

        $path = $request->file('image')->store('leadership', [ 'disk' => 'public' ]);

        Leadership::create(array_merge($request->all(), [ 'image' => $path ]));

        return redirect('/admin/vodstvo');
    }

    public function edit(Leadership $vodstvo)
    {
        return view('admin.leadership.edit')->with([ 'leadership' => $vodstvo->toArray() ]);
    }

    public function update(Leadership $vodstvo, LeadershipRequest $request)
    {
        $data = $request->all();
        if ( $request->hasFile('image') ) {
            $this->validate($request, [
                'image' => 'required|file|image'
            ]);
            Storage::delete('public/' . $vodstvo->image);
            $path = $request->file('image')->store('leadership', [ 'disk' => 'public' ]);
            $data = array_merge($data, [ 'image' => $path ]);
        }

        $vodstvo->update($data);

        return redirect('admin/vodstvo');
    }

    public function destroy(Leadership $vodstvo)
    {
        Storage::delete('public/' . $vodstvo->image);
        $vodstvo->delete();

        return "success";
    }
}
