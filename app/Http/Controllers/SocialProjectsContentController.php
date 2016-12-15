<?php

namespace App\Http\Controllers;

use App\SocialProject;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\SocialProjectsContent;
use Image;

class SocialProjectsContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function socialProjectPhotoAdd(Request $request)
    {
        $this->validate($request, [
            'photo' => ['required'],
            'social_project_id' => ['required'],
        ]);

        //get all data from a form

        $newPhoto = new SocialProjectsContent();

        $newPhoto->social_project_id = $request->social_project_id;

        //get file from a request

        $file = $request->file('photo');

        //set file name
        $filename = uniqid() . ' - ' . $file->getClientOriginalName();
        $newPhoto->content = $filename;

        //move file to a specific folder

        if(!file_exists('picUploadTestDir/socialProjects'))
        {
            mkdir('picUploadTestDir/socialProjects', 0777, true);
        }
        $file->move('picUploadTestDir/socialProjects/', $filename);


        $file = Image::make('picUploadTestDir/socialProjects/'. $filename)->resize(1024, 768)->save('picUploadTestDir/socialProjects/' . $filename, 100);

        //save img path to DB

        $newPhoto->save();

        return back()->with('message', 'New Photo was uploaded successfully!');
    }

    public function socialProjectPhotoDelete(SocialProjectsContent $photo)
    {
        $photoToDelete = 'picUploadTestDir/socialProjects/' . $photo->content;

        if(file_exists($photoToDelete))
        {
            unlink($photoToDelete);
        }

        $photo->delete();

        return back()->with('message', 'Photo was deleted successfully!');
    }

    public function socialProjectVideoAdd(Request $request)
    {

        $this->validate($request, [
            'content' => ['required'],
            'social_project_id' => ['required'],
        ]);

        $newVideo = new SocialProjectsContent($request->all());

        $newVideo->save();

        return back()->with('message', 'Video link was saved successfully!');
    }


    public function socialProjectVideoDelete(SocialProjectsContent $video)
    {
        $video->delete();

        return back()->with('message', 'Video link was deleted successfully!');
    }

}
