<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SocialProject;
use Image;

class SocialProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addProject(Request $request)
    {
        $this->validate($request, [
            'project_name' => ['required'],
            'description' => ['required'],
        ]);

        $newProject = new SocialProject($request->all());

        $thumb = $request->file('thumbnail');

        //set thumbnail name and move to a folder
        $thumbName = uniqid() . '_background_' . $thumb->getClientOriginalName();
        $newProject->thumbnail = $thumbName;

        if(!file_exists('picUploadTestDir/socialProjects/'))
        {
            mkdir('picUploadTestDir/socialProjects/', 0777, true);
        }

        $thumb->move('picUploadTestDir/socialProjects/', $thumbName);

        //creating thumbnails of img

        $thumb = Image::make('picUploadTestDir/socialProjects/'. $thumbName)->resize(480, 360)->save('picUploadTestDir/socialProjects/' . $thumbName, 100);

        //Set a collage

        $collage = $request->file('collage');

        //set thumbnail name and move to a folder
        $collageName = uniqid() . '-' . $collage->getClientOriginalName();
        $newProject->collage = $collageName;

        $collage->move('picUploadTestDir/socialProjects/', $collageName);

        //creating thumbnails of img

        $col= Image::make('picUploadTestDir/socialProjects/'. $collageName)->resize(1024, 768)->save('picUploadTestDir/socialProjects/' . $collageName, 100);

        $newProject->save();

        return back()->with('message', 'New social project was created successfully!');
    }

    public function deleteProject(SocialProject $project)
    {
        $thumb = 'picUploadTestDir/socialProjects/' . $project->thumbnail;

        if(file_exists($thumb))
        {
            unlink($thumb);
        }

        $collage = 'picUploadTestDir/socialProjects/' . $project->collage;

        if(file_exists($collage))
        {
            unlink($collage);
        }

        $project->delete();

        return back()->with('message', 'Social project was deleted successfully!');
    }
}
