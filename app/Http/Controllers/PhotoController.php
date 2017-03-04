<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Photo;
use App\GalleryVideo;
use Image;

class PhotoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function imgUpload(Request $request)
    {
        $this->validate($request, [
            'photo' => ['required'],
            'gallery_id' => ['required'],
        ]);

        //get all data from a form

        $newPhoto = new Photo();

        $newPhoto->gallery_id = $request->gallery_id;

        //get file from a request

        $file = $request->file('photo');

        //set file name
        $filename = uniqid() . ' - ' . $file->getClientOriginalName();
        $newPhoto->photo_name = $filename;

        //move file to correct location

        if(!file_exists('picUploadTestDir/gallery'))
        {
            mkdir('picUploadTestDir/gallery', 0777, true);
        }
        $file->move('picUploadTestDir/gallery/', $filename);


        $file = Image::make('picUploadTestDir/gallery/'. $filename)->resize(1024, 768)->save('picUploadTestDir/gallery/' . $filename, 100);

        //save img path to DB

        $newPhoto->save();

        return back()->with('message', 'Img was uploaded successfully!');
    }


    public function photoDelete(Photo $photo)
    {
        $photoToDelete = 'picUploadTestDir/gallery/' . $photo->photo_name;

        if(file_exists($photoToDelete))
        {
            unlink($photoToDelete);
        }

        $photo->delete();

        return back()->with('message', 'Photo was deleted successfully!');
    }

    public function videoUpload(Request $request)
    {

        $this->validate($request, [
            'video_name' => ['required'],
            'gallery_id' => ['required'],
        ]);

        $newVideo = new GalleryVideo($request->all());

        $newVideo->save();

        return back()->with('message', 'Video link was saved successfully!');
    }

    public function videoDelete(GalleryVideo $video)
    {
        $video->delete();

        return back()->with('message', 'Video link was deleted successfully!');
    }
}
