<?php

namespace App\Http\Controllers;

use App\Event;
use App\Gallery;
use App\Leadership;
use App\Post;
use App\Sponsor;
use App\Video;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home()
    {
        $sponsors = Sponsor::pluck('logo');
        $events   = Event::whereType('slo')->latest(6)->get();

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

        $events = $events->sortBy('begins_at')->map(function($event) {
            $event['day'] = $event['begins_at']->format('Y-m-d');

            return $event;
        })->groupBy('day');

        return view('pages.center.business.events', compact('events'));
    }

    public function slo_events()
    {
        $events = Event::inFuture()->whereType('slo')->orderBy('begins_at', 'DESC')->get();

        return view('pages.center.events', compact('events'));
    }

    public function fans_events()
    {
        $events = Event::inFuture()->whereType('fans')->orderBy('begins_at', 'DESC')->get();

        return view('pages.fans.events', compact('events'));
    }

    public function news()
    {
        $news = Post::orderBy('created_at', 'DESC')->get();

        return view('pages.news', compact('news'));
    }

    public function gallery()
    {
        $galleries = Gallery::all();

        return view('pages.multimedia.gallery', compact('galleries'));
    }

    public function videos()
    {
        $videos = Video::all();

        return view('pages.multimedia.videos', compact('videos'));
    }

    public function event(Event $event)
    {
        return view('pages.event', compact('event'));
    }

    public function post(Post $post)
    {
        return view('pages.news_full', compact('post'));
    }
}
