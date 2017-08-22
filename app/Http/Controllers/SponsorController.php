<?php

namespace App\Http\Controllers;

use App\Http\Requests\SponsorRequest;
use App\Sponsor;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sponsors = Sponsor::all();

        return view('admin.sponsors.index', compact('sponsors'));
    }

    public function store(SponsorRequest $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'logo' => 'required|file|image'
        ]);

        $path = $request->file('logo')->store('sponsors', [ 'disk' => 'public' ]);

        Sponsor::create(array_merge($data, [ 'logo' => $path ]));

        return redirect('admin/sponzorji');
    }

    public function edit(Sponsor $sponzorji)
    {
        return view('admin.sponsors.edit')->with([ 'sponsor' => $sponzorji->toArray() ]);
    }

    public function update(Sponsor $sponzorji, SponsorRequest $request)
    {
        $data = $request->all();

        if ( $request->hasFile('logo') ) {
            $this->validate($request, [
                'logo' => 'required|file|image'
            ]);
            Storage::delete('public/' . $sponzorji->logo);
            $path = $request->file('logo')->store('sponsors', [ 'disk' => 'public' ]);
            $data = array_merge($data, [ 'logo' => $path ]);
        }

        $sponzorji->update($data);

        return redirect('admin/sponzorji');
    }

    public function destroy(Sponsor $sponzorji)
    {
        Storage::delete('public/' . $sponzorji->logo);
        $sponzorji->delete();

        return "success";
    }
}
