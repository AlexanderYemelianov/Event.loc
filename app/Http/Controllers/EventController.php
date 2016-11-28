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

    public function addProgram(Request $request)
    {
        $this->validate($request, [
        'event_name' => ['required'],
        'description' => ['required'],
        ]);

        $newEvent = new Event();
        $newEvent->event_name = $request->event_name;
        $newEvent->description = $request->description;
        $newEvent->events_type_id = $request->events_type_id;

        $file = $request->file('thumbnails');

        //set thumbnail name and move to a folder
        $filename = uniqid() . '_thumbnail_' . $file->getClientOriginalName();
        $newEvent->thumbnails = $filename;

        if(!file_exists('picUploadTestDir/thumbnails/'))
        {
            mkdir('picUploadTestDir/thumbnails', 0777, true);
        }

        //Create a thumbnail for a program

        $file->move('picUploadTestDir/thumbnails/', $filename);

        //creating thumbnails of img

        $thumb = Image::make('picUploadTestDir/thumbnails/'. $filename)->resize(480, 360)->save('picUploadTestDir/thumbnails/' . $filename, 100);

        //Create a collage for a program

        $collage = $request->file('collage');

        $collageName = uniqid() .'-'. $collage->getClientOriginalName();
        $newEvent->collage = $collageName;

        if(!file_exists('picUploadTestDir/collages/'))
        {
            mkdir('picUploadTestDir/collages', 0777, true);
        }

        $collage->move('picUploadTestDir/collages/', $collageName);

        //creating thumbnails of img

        $collage = Image::make('picUploadTestDir/collages/'. $collageName)->resize(1024, 768)->save('picUploadTestDir/collages/' . $collageName, 100);

        $newEvent->save();

        //Session does not working
        return back()->with('message', 'New program was created successfully!');

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

        $collage = 'picUploadTestDir/collages/' . $event->collage;

        if(file_exists($collage))
        {
            unlink($collage);
        }

        $event->delete();

        return back()->with('message', 'Program was deleted successfully!');
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

            $thumb = Image::make('picUploadTestDir/thumbnails/'. $filename)->resize(480, 360)->save('picUploadTestDir/thumbnails/' . $filename, 100);

            $oldThumbPath = 'picUploadTestDir/thumbnails/' . $request->oldThumb;

            if(file_exists($oldThumbPath))
            {
                unlink($oldThumbPath);
            }
        }

        $collage = $request->file('collage');

        if(isset($collage))
        {
            //set thumbnail name and move to a folder
            $collageName = uniqid() . '-' . $collage->getClientOriginalName();
            $event->collage = $collageName;

            if(!file_exists('picUploadTestDir/collages/'))
            {
                mkdir('picUploadTestDir/thumbnails', 0777, true);
            }

            $collage->move('picUploadTestDir/collages/', $collageName);

            //creating thumbnails of img

            $collage = Image::make('picUploadTestDir/collages/'. $collageName)->resize(1024, 768)->save('picUploadTestDir/collages/' . $collageName, 100);

            $oldCollagePath = 'picUploadTestDir/collages/' . $request->oldCollage;

            if(file_exists($oldCollagePath))
            {
                unlink($oldCollagePath);
            }
        }

        $event->update();

        return back()->with('message', 'Program was updated successfully!');
    }
}
