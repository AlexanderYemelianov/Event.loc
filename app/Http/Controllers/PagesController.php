<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\EventsType;
use App\Photo;
Use App\Event;
Use App\Test;
class PagesController extends Controller
{
    public function index()
    {
        $teamBuilding = EventsType::all()->where('class', 4);

        //Its not good! You should find retrieve a single item from a collection rather then make to request to DB

        $corpEvents = EventsType::all()->where('class', 1);

        $fashionEvents = EventsType::all()->where('class', 2);

        $privateEvents = EventsType::all()->where('class', 3);

        return view('pages.index', compact('teamBuilding' ,'corpEvents','fashionEvents', 'privateEvents'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function clients()
    {
        return view('pages.clients');
    }

    public function socialProjects()
    {
        return view('pages.socialProjects');
    }

    public function locations()
    {
        return view('pages.locations');
    }

    public function gallery()
    {
        $photos = Photo::all();

        return view('pages.gallery', compact('photos'));
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function teambuildingShow(EventsType $type)
    {
        $type->load('events');

        return view('pages.teambuildingShow', compact('type'));
    }

    public function showType(EventsType $type)
    {
        $type->load('events');

        return view('pages.showType', compact('type'));
    }

    public function showEvent(Event $event)
    {
        $events = Event::all()->where('events_type_id', $event->events_type_id);

       return view('pages.showEvent', compact('event', 'events'));
    }

}
