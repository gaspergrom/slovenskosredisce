<?php

namespace App\Http\Controllers;

use App\Event;
use App\Gallery;
use App\Http\Requests\ContactRequest;
use App\Leadership;
use App\Mail\Contact;
use App\Post;
use App\Sponsor;
use App\Video;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

    public function home()
    {
        $sponsors = Sponsor::all();
        $events   = Event::inFuture()->latest(3)->get();

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

        $events = $events->sortBy('begins_at')->map(function ($event) {
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

    public function singleGallery(Gallery $gallery)
    {
        return view('pages.multimedia.gallery_single', compact('gallery'));
    }

    public function videos()
    {
        $videos = Video::all();

        return view('pages.multimedia.videos', compact('videos'));
    }

    public function events()
    {
        $events = Event::inFuture()->get();

        return view('pages.events', compact('events'));
    }

    public function event(Event $event)
    {
        return view('pages.event', compact('event'));
    }

    public function post(Post $post)
    {
        return view('pages.news_full', compact('post'));
    }

    public function contact(ContactRequest $request)
    {
        Mail::to('ziga.strgar@gmail.com')->send(new Contact($request));

        return 'Sporočilo uspešno poslano';
    }
}
