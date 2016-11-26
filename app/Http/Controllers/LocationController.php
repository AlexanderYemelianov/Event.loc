<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Location;
use Image;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addLocation(Request $request)
    {
        $this->validate($request, [
            'location_name' => ['required'],
            'location_description' => ['required'],
        ]);

        $newLocation = new Location($request->all());

        $collage = $request->file('location_collage');

        if(!file_exists('picUploadTestDir/locations/'))
        {
            mkdir('picUploadTestDir/locations/', 0777, true);
        }

        //Set a collage

        $collageName = uniqid() . '-' . $collage->getClientOriginalName();
        $newLocation->location_collage = $collageName;

        $collage->move('picUploadTestDir/locations/', $collageName);

        //creating thumbnails of img

        $col= Image::make('picUploadTestDir/locations/'. $collageName)->resize(1024, 768)->save('picUploadTestDir/locations/' . $collageName, 80);

        $newLocation->save();

        return back()->with('message', 'New Location was created successfully!');
    }

    public function deleteLocation(Location $location)
    {
        $collage = 'picUploadTestDir/locations/' . $location->location_collage;

        if(file_exists($collage))
        {
            unlink($collage);
        }

        $location->delete();

        return back()->with('message', 'Location  was deleted successfully!');
    }
}
