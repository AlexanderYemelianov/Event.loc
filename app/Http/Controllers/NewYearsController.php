<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\NewYear;
use Image;

class NewYearsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addNYProgram(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'description' => ['required'],
        ]);

        $newYearProgram = new NewYear();
        $newYearProgram->name = $request->name;
        $newYearProgram->description = $request->description;

        $file = $request->file('photo');

        //set thumbnail name and move to a folder
        $filename = uniqid() . '_photo_' . $file->getClientOriginalName();
        $newYearProgram->photo = $filename;

        if(!file_exists('picUploadTestDir/newYearPhotos/'))
        {
            mkdir('picUploadTestDir/newYearPhotos', 0777, true);
        }

        //Create a thumbnail for a program

        $file->move('picUploadTestDir/newYearPhotos/', $filename);

        //creating thumbnails of img

        $photo = Image::make('picUploadTestDir/newYearPhotos/'. $filename)->resize(480, 360)->save('picUploadTestDir/newYearPhotos/' . $filename, 100);

        //Create a collage for a program


        $newYearProgram->save();

        //Session does not working
        return back()->with('message', 'New program for New Year was created successfully!');

    }

    public function delete(NewYear $newYear)
    {
        $photo = 'picUploadTestDir/newYearPhotos/' . $newYear->photo;

        if(file_exists($photo))
        {
            unlink($photo);
        }

        $newYear->delete();

        return back()->with('message', 'New Year program was deleted successfully!');
    }


}
