<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Image;
use App\TypesPhoto;

class TypesPhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addTypesPhoto(Request $request)
    {

        //get all data from a form

        $newPhoto = new TypesPhoto();

        $newPhoto->events_type_id = $request->events_type_id;

        //get file from a request

        $file = $request->file('photo');

        //set file name
        $filename = uniqid() . ' - ' . $file->getClientOriginalName();
        $newPhoto->photo = $filename;

        //move file to correct location

        if(!file_exists('picUploadTestDir/typesPhotos'))
        {
            mkdir('picUploadTestDir/typesPhotos', 0777, true);
        }
        $file->move('picUploadTestDir/typesPhotos/', $filename);


        $file = Image::make('picUploadTestDir/typesPhotos/'. $filename)->resize(1024, 768)->save('picUploadTestDir/typesPhotos/' . $filename, 80);

        //save img path to DB

        $newPhoto->save();

        return back()->with('message', 'Photo was uploaded successfully!');
    }


    public function photoDelete(TypesPhoto $photo)
    {
        $photoToDelete = 'picUploadTestDir/typesPhotos/' . $photo->photo;

        if(file_exists($photoToDelete))
        {
            unlink($photoToDelete);
        }

        $photo->delete();

        return back()->with('message', 'Photo was deleted successfully!');
    }
}
