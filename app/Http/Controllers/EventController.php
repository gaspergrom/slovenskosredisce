<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::orderBy('begins_at', 'DESC')->get();

        return view('admin.events.index', compact('events'));
    }

    public function store(EventRequest $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'image' => 'required|file|image',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('events', ['disk' => 'public']);
            $data = array_merge($data, ['image' => $path]);
        }

        Event::create($data);

        return redirect("admin/dogodki");
    }

    public function edit(Event $dogodki)
    {
        $data              = $dogodki->toArray();
        $data['begins_at'] = $dogodki->formBeginsAtAttribute($dogodki->begins_at);
        $data['type']      = $dogodki->formTypeAttribute($dogodki->type);

        return view('admin.events.edit')->with(['event' => $data]);
    }

    public function update(Event $dogodki, EventRequest $request)
    {
        $data = $request->all();

        if ( ! $request->filled('type')) {
            $data['type'] = 'fans';
        }

        if ($request->hasFile('image')) {
            if ( ! empty($dogodki->image)) {
                Storage::delete('public/' . $dogodki->image);
            }
            $path = $request->file('image')->store('events', ['disk' => 'public']);
            $data = array_merge($data, ['image' => $path]);
        }

        $dogodki->update($data);

        return redirect('admin/dogodki');
    }

    public function destroy(Event $dogodki)
    {
        if ( ! empty($dogodki->image)) {
            Storage::delete('public/' . $dogodki->image);
        }
        $dogodki->delete();

        return "success";
    }
}
