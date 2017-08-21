<?php

namespace App\Http\Controllers;

use App\Http\Requests\SponsorRequest;
use App\Sponsor;

class SponsorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sponsors = Sponsor::all();
    }

    public function show(Sponsor $sponsor)
    {

    }

    public function create()
    {

    }

    public function store(SponsorRequest $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'logo' => 'required|file|image'
        ]);

        $path = $request->file('logo')->store('sponsors', [ 'disk' => 'public' ]);

        Sponsor::create(array_merge($data, [ 'logo' => $path ]));
    }

    public function edit(Sponsor $sponsor)
    {

    }

    public function update(Sponsor $sponsor, SponsorRequest $request)
    {
        $data = $request->all();

        if ( $request->hasFile('logo') ) {
            $this->validate($request, [
                'logo' => 'required|file|image'
            ]);
            $path = $request->file('logo')->store('sponsors', [ 'disk' => 'public' ]);
            $data = array_merge($data, [ 'logo' => $path ]);
        }

        $sponsor->update($data);
    }

    public function destroy(Sponsor $sponsor)
    {
        $sponsor->delete();
    }
}
