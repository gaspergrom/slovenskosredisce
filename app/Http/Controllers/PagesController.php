<?php

namespace App\Http\Controllers;

use App\Event;
use App\Leadership;
use App\Sponsor;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home()
    {
        $sponsors = Sponsor::pluck('logo');
        $events   = Event::whereType('fans')->latest(5)->get();

        return view('pages.home', compact('sponsors', 'events'));
    }

    public function sponsors()
    {
        $sponsors = Sponsor::all();

        return view('pages.center.business.sponsors', compact('sponsors'));
    }

    public function team()
    {
        $leadership = Leadership::all();

        return view('pages.center.team', compact('leadership'));
    }

    public function business_events()
    {
        $events = Event::whereType('business')->get();

        return view('pages.center.business.events');
    }
}
