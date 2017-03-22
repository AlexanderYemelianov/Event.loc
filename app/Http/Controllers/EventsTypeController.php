<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\EventsType;
use Image;

class EventsTypeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

        public function addNewType(Request $request)
    {
        $this->validate($request, [
            'type_name' => ['required'],
            'slug' => ['required'],
            'description' => ['required'],
            'class' => ['required'],
        ]);

        $newType = new EventsType($request->all());

        $newType->description = html_entity_decode($request->description);

        $file = $request->file('thumbnails');

        //set thumbnail name and move to a folder
        $filename = uniqid() . '_background_' . $file->getClientOriginalName();
        $newType->thumbnail = $filename;

        if(!file_exists('picUploadTestDir/thumbnails/'))
        {
            mkdir('picUploadTestDir/thumbnails', 0777, true);
        }

        $file->move('picUploadTestDir/thumbnails/', $filename);

        //creating thumbnails of img

        $thumb = Image::make('picUploadTestDir/thumbnails/'. $filename)->resize(1024, 768)->save('picUploadTestDir/thumbnails/' . $filename, 100);

        $newType->save();

        return back()->with('message', 'New events type was created successfully!');

    }

    public function edit(EventsType $type)
    {
        return view('admin.editType', compact('type'));
    }

    public function update(Request $request, EventsType $updated)
    {
        $updated->type_name = $request->type_name;
        $updated->description = $request->description;

        $file = $request->file('thumbnails');

        if(isset($file))
        {
            //set thumbnail name and move to a folder
            $filename = uniqid() . '_background_' . $file->getClientOriginalName();
            $updated->thumbnail = $filename;

            if(!file_exists('picUploadTestDir/thumbnails/'))
            {
                mkdir('picUploadTestDir/thumbnails', 0777, true);
            }

            $file->move('picUploadTestDir/thumbnails/', $filename);

            //creating thumbnails of img

            $thumb = Image::make('picUploadTestDir/thumbnails/'. $filename)->resize(1024, 768)->save('picUploadTestDir/thumbnails/' . $filename, 100);

            $oldThumbPath = 'picUploadTestDir/thumbnails/' . $request->oldThumb;

            if(file_exists($oldThumbPath))
            {
                unlink($oldThumbPath);
            }
        }

        $updated->update();

        return back()->with('message', 'Event type was updated successfully!');
    }

    public function delete(EventsType $type)
    {
        $thumb = 'picUploadTestDir/thumbnails/' . $type->thumbnail;

        if(file_exists($thumb))
        {
            unlink($thumb);
        }

        $type->delete();
        return back()->with('message', 'Event type was deleted successfully!');
    }

}
