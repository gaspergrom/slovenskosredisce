<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadershipRequest;
use App\Leadership;

class LeadershipController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $leaderships = Leadership::all();
    }

    public function show(Leadership $leadership)
    {

    }

    public function create()
    {

    }

    public function store(LeadershipRequest $request)
    {
        Validator::make($request, [
            'image' => 'required|file|image'
        ]);

        $path = $request->file('image')->store('public/leadership');

        Leadership::create(array_merge($request->all(), [ 'image' => $path ]));
    }

    public function edit(Leadership $leadership)
    {

    }

    public function update(Leadership $leadership, LeadershipRequest $request)
    {
        $data = $request->all();
        if ( $request->hasFile('image') ) {
            Validator::make($request, [
                'image' => 'required|file|image'
            ]);
            $path = $request->file('image')->store('public/leadership');
            $data = array_merge($data, [ 'image' => $path ]);
        }

        $leadership->update($data);
    }

    public function destroy(Leadership $leadership)
    {
        $leadership->delete();
    }
}
