<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use App\EventsPhoto;
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

        $thumb = Image::make('picUploadTestDir/thumbnails/'. $filename)->resize(1024, 768)->save('picUploadTestDir/thumbnails/' . $filename, 100);

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

        if($event->photos->isEmpty())
        {

            $thumb = 'picUploadTestDir/thumbnails/' . $event->thumbnails;

            if(file_exists($thumb))
            {
                unlink($thumb);
            }

            $event->delete();

            return back()->with('message', 'Program was deleted successfully!');
        }else
        {
            return back()->with('message', 'Please delete all photos first!');
        }

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

        $event->update();

        return back()->with('message', 'Program was updated successfully!');
    }

    public function eventPhotoAdd(Request $request)
    {
        $this->validate($request, [
            'photo' => ['required'],
            'event_id' => ['required'],
        ]);

        //get all data from a form

        $newPhoto = new EventsPhoto();

        $newPhoto->event_id = $request->event_id;

        //get file from a request

        $file = $request->file('photo');

        //set file name
        $filename = uniqid() . ' - ' . $file->getClientOriginalName();
        $newPhoto->photo = $filename;

        //move file to correct location

        if(!file_exists('picUploadTestDir/eventsPhoto'))
        {
            mkdir('picUploadTestDir/eventsPhoto', 0777, true);
        }
        $file->move('picUploadTestDir/eventsPhoto/', $filename);


        $file = Image::make('picUploadTestDir/eventsPhoto/'. $filename)->resize(1024, 768)->save('picUploadTestDir/eventsPhoto/' . $filename, 100);

        //save img path to DB

        $newPhoto->save();

        return back()->with('message', 'Img was uploaded successfully!');
    }

    public function eventPhotoDelete(EventsPhoto $event)
    {
        $photoToDelete = 'picUploadTestDir/eventsPhoto/' . $event->photo;

        if(file_exists($photoToDelete))
        {
            unlink($photoToDelete);
        }

        $event->delete();

        return back()->with('message', 'Photo was deleted successfully!');
    }
}
