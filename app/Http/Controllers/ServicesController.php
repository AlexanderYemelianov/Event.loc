<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Image;
use App\Services;

class ServicesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'service' => ['required'],
            'service_description' => ['required'],
            'price' => ['required'],
        ]);

        $newService = new Services($request->all());

        $file = $request->file('service_photo');

        //set thumbnail name and move to a folder
        $filename = uniqid() . ' - ' . $file->getClientOriginalName();
        $newService->service_photo = $filename;

        if(!file_exists('picUploadTestDir/services/'))
        {
            mkdir('picUploadTestDir/services', 0777, true);
        }

        $file->move('picUploadTestDir/services/', $filename);

        //creating thumbnails of img

        $thumb = Image::make('picUploadTestDir/services/'. $filename)->resize(480, 360)->save('picUploadTestDir/services/' . $filename, 100);

        $newService->save();

        return back()->with('message', 'New service was created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteService(Services $service)
    {
        $photo = 'picUploadTestDir/services/' . $service->service_photo;

        if(file_exists($photo))
        {
            unlink($photo);
        }

        $service->delete();
        return back()->with('message', 'Service was deleted successfully!');
    }
}
