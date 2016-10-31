<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use Image;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addEvent(Request $request)
    {
        $this->validate($request, [
        'event_name' => ['required'],
        'events_type_id' => ['required'],
        'description' => ['required'],
        ]);

        $newEvent = new Event();
        $newEvent->event_name = $request->event_name;
        $newEvent->events_type_id = $request->events_type_id;
        $newEvent->description = $request->description;

        $file = $request->file('thumbnails');

        //set thumbnail name and move to a folder
        $filename = uniqid() . '_thumbnail_' . $file->getClientOriginalName();
        $newEvent->thumbnails = $filename;

        if(!file_exists('picUploadTestDir/thumbnails/'))
        {
            mkdir('picUploadTestDir/thumbnails', 0777, true);
        }

        $file->move('picUploadTestDir/thumbnails/', $filename);

        //creating thumbnails of img

        $thumb = Image::make('picUploadTestDir/thumbnails/'. $filename)->resize(250, 250)->save('picUploadTestDir/thumbnails/' . $filename, 100);

        $newEvent->save();

        //Session does not working
        return back()->with('message', 'New event was created succesfully!');

    }

    public function edit(Event $event)
    {
        return view('admin.editEvent', compact('event'));
    }

    public function delete(Event $event)
    {
        $thumb = 'picUploadTestDir/thumbnails/' . $event->thumbnails;

        if(file_exists($thumb))
        {
            unlink($thumb);
        }

        $event->delete();
        return back()->with('message', 'Event was deleted successfully!');
    }

    public function update(Request $request, Event $event)
    {
        $event->event_name = $request->event_name;
        $event->description = $request->description;

        $file = $request->file('thumbnails');

        if(isset($file))
        {
            //set thumbnail name and move to a folder
            $filename = uniqid() . '_thumbnail_' . $file->getClientOriginalName();
            $event->thumbnails = $filename;

            if(!file_exists('picUploadTestDir/thumbnails/'))
            {
                mkdir('picUploadTestDir/thumbnails', 0777, true);
            }

            $file->move('picUploadTestDir/thumbnails/', $filename);

            //creating thumbnails of img

            $thumb = Image::make('picUploadTestDir/thumbnails/'. $filename)->resize(250, 250)->save('picUploadTestDir/thumbnails/' . $filename, 100);

            $oldThumbPath = 'picUploadTestDir/thumbnails/' . $request->oldThumb;

            if(file_exists($oldThumbPath))
            {
                unlink($oldThumbPath);
            }
        }

        $event->update();

        return back()->with('message', 'Event was updated successfully!');
    }

}
