<?php

namespace App\Http\Controllers;

use App\BusinessEvent;
use App\Http\Requests\BusinessEventRequest;
use Illuminate\Http\Request;

class BusinessEventsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = BusinessEvent::all();

        return view('admin.business_events.index', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(BusinessEventRequest $request)
    {
        BusinessEvent::create($request->all());

        return redirect('/admin/poslovni');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessEvent $poslovni)
    {
        return view('admin.business_events.edit')->with(['event' => $poslovni->toArray()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(BusinessEventRequest $request, BusinessEvent $poslovni)
    {
        $poslovni->update($request->all());

        return redirect('/admin/poslovni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessEvent $poslovni)
    {
        $poslovni->delete();

        return "success";
    }
}
