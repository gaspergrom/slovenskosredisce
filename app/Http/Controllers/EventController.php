<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::all();

        return view('admin.events.index', compact('events'));
    }

    public function store(EventRequest $request)
    {
        $data = $request->all();

        if ( $request->hasFile('image') ) {
            $path = $request->file('image')->store('events', [ 'disk' => 'public' ]);
            $data = array_merge($data, [ 'image' => $path ]);
        }

        Event::create($data);

        return redirect("admin/dogodki");
    }

    public function edit(Event $event)
    {
        return view('admin.events.event', compact('event'));
    }

    public function update(Event $event, EventRequest $request)
    {
        $data = $request->all();

        if ( $request->hasFile('image') ) {
            $path = $request->file('image')->store('events', [ 'disk' => 'public' ]);
            $data = array_merge($data, [ 'image' => $path ]);
        }

        $event->update($data);
    }

    public function destroy(Event $event)
    {
        $event->delete();
    }
}
