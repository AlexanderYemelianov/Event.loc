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

        $thumb = Image::make('picUploadTestDir/socialProjects/'. $thumbName)->resize(1024, 768)->save('picUploadTestDir/socialProjects/' . $thumbName, 100);

        $newProject->save();

        return back()->with('message', 'New social project was created successfully!');
    }

    public function deleteSocialProject(SocialProject $project)
    {

        if($project->content->isEmpty())
        {
            $thumb = 'picUploadTestDir/socialProjects/' . $project->thumbnail;

            if(file_exists($thumb))
            {
                unlink($thumb);
            }

            $project->delete();

            return back()->with('message', 'Social project was deleted successfully!');
        }else
        {
            return back()->with('message', 'Please delete all content first!');
        }

    }

    public function editSocialProject(SocialProject $project)
    {

        return view('admin.editSocialProject', compact('project'));
    }

    public function socialProjectUpdate(Request $request, SocialProject $project)
    {
        $project->project_name = $request->project_name;
        $project->description = $request->description;

        $file = $request->file('thumbnail');

        if(isset($file))
        {
            //set thumbnail name and move to a folder
            $filename = uniqid() . '_background_' . $file->getClientOriginalName();
            $project->thumbnail = $filename;

            if(!file_exists('picUploadTestDir/socialProjects/'))
            {
                mkdir('picUploadTestDir/socialProjects', 0777, true);
            }

            $file->move('picUploadTestDir/socialProjects/', $filename);

            //creating thumbnails of img

            $thumb = Image::make('picUploadTestDir/socialProjects/'. $filename)->resize(1024, 768)->save('picUploadTestDir/socialProjects/' . $filename, 100);

            $oldThumbPath = 'picUploadTestDir/socialProjects/' . $request->oldThumb;

            if(file_exists($oldThumbPath))
            {
                unlink($oldThumbPath);
            }
        }

        $project->update();

        return back()->with('message', 'Social Project was updated successfully!');
    }
}
