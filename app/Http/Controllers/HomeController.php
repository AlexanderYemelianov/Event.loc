<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Message;
use App\EventsType;
use App\Event;
use App\Gallery;
use App\Client;
use App\SocialProject;
use App\Location;
use App\News;
use App\NewYear;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('admin.home');
    }

    public function eventsTypes()
    {
        $eventsTypes = EventsType::all();

        return view('admin.eventsTypes', compact('eventsTypes'));
    }

    public function events()
    {
        $events = Event::all();

        return view('admin.events', compact('events'));
    }

    public function galleries()
    {
        $galleries = Gallery::all()->sortByDesc('date');

        return view('admin.gallery', compact('galleries'));
    }

    public function getClients()
    {
        $clients = Client::all();

        return view('admin.clients', compact('clients'));
    }

    public function socialProjects()
    {
        $socialProjects = SocialProject::all();

        return view('admin.socialProjects', compact('socialProjects'));
    }

    public function getLocations()
    {
        $locations = Location::all();

        return view('admin.locations', compact('locations'));
    }

    public function getNews()
    {
        $news = News::all()->sortByDesc('news_date');

        return view('admin.news', compact('news'));
    }

    public function getNewYearPrograms()
    {
        $newYearPrograms = NewYear::all();

        return view('admin.newYearPrograms', compact('newYearPrograms'));
    }

    //Manipulation with messages

    public function getMessages()
    {
        $messages = Message::all()->where('active', 1);

        $sortedMessages = $messages->sortByDesc('id')->take(20);

        return view('admin.messages', compact('sortedMessages'));

    }

    public function getAllMessages()
    {
        $messages = Message::all();

        $sortedMessages = $messages->sortByDesc('id');

        return view('admin.messages', compact('sortedMessages'));

    }

    public function deleteMessage(Message $message)
    {
        $message->delete();

        return back();
    }

    public function checkMessage(Message $message)
    {
        $message->active = 0;

        $message->save();

        return back();
    }
}
