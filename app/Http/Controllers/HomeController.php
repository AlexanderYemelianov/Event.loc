<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Message;
use App\EventsType;
use App\Event;
use App\Photo;

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
        $events = Event::all()->where('events_type_id', '>', 1);

        //request to DB should be optimized
        $eventsTypes = EventsType::all();
        return view('admin.events', compact('events', 'eventsTypes'));
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

    public function checkMessage(Message $message)
    {
        $message->active = 0;

        $message->save();

        return back();
    }

    //Gallary

    public function getAllPhoto()
    {

        $photos = Photo::all();

        $eventsId = Event::all();

        return view('admin.gallery', compact('eventsId', 'photos'));
    }

    public function getPhotoForEvent(Request $request)
    {

        if($request->events_id === "all")
        {

            return $this->getAllPhoto();
        }
        else
        {
            $photos = Photo::all()->where('events_id', $request->events_id);
        }

        $eventsId = Event::all();

        return view('admin.gallery', compact('eventsId', 'photos'));
    }

}
