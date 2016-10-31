<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Photo;
use Image;

class PhotoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function imgUpload(Request $request)
    {

        //get all data from a form

        $newPhoto = new Photo();

        $newPhoto->display_name = $request->display_name;
        $newPhoto->events_id = $request->events_id;
        $newPhoto->photo_description = $request->photo_description;

        //get file from a request

        $file = $request->file('fileToUpload');

        //set file name
        $filename = uniqid() . ' - ' . $file->getClientOriginalName();
        $newPhoto->photo_name = $filename;

        //move file to correct location

        if(!file_exists('picUploadTestDir'))
        {
            mkdir('picUploadTestDir', 0777, true);
        }
        $file->move('picUploadTestDir', $filename);


        $file = Image::make('picUploadTestDir/'. $filename)->resize(768, 576)->save('picUploadTestDir/' . $filename, 80);

        //save img path to DB

        $newPhoto->save();

        return back()->with('message', 'Img was uploaded succesfully!');
    }

    public function photoDelete(Photo $photo)
    {
        $photo->delete();

        $photoToDelete = 'picUploadTestDir/' . $photo->photo_name;

        if(file_exists($photoToDelete))
        {
            unlink($photoToDelete);
        }


        return back()->with('message', 'Photo was deleted successfully!');
    }
}
