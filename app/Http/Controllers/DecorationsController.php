<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Decorations;
use Image;

class DecorationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'decorations_name' => ['required'],
            'decorations_description' => ['required'],
            'decorations_thumb' => ['required'],
        ]);

        $newDecorations = new Decorations($request->all());

        $thumb = $request->file('decorations_thumb');

        //set thumbnail name and move to a folder
        $thumbName = uniqid() . '_background_' . $thumb->getClientOriginalName();
        $newDecorations->decorations_thumb = $thumbName;

        if(!file_exists('picUploadTestDir/decorations/'))
        {
            mkdir('picUploadTestDir/decorations/', 0777, true);
        }

        $thumb->move('picUploadTestDir/decorations/', $thumbName);

        //creating thumbnails of img

        $thumb = Image::make('picUploadTestDir/decorations/' . $thumbName)->resize(1024, 768)->save('picUploadTestDir/decorations/' . $thumbName, 100);

        $newDecorations->save();

        return back()->with('message', 'New decorations was created successfully!');
    }

    public function show($id)
    {
        $decorations = Decorations::find($id);

        return view('admin.editDecoration', compact('decorations'));
    }

    public function update(Request $request, $id)
    {
        $decorations = Decorations::find($id);
        $decorations->decorations_name = $request->decorations_name;
        $decorations->decorations_description = $request->decorations_description;

        $file = $request->decorations_thumb;

        if(isset($file))
        {
            //set thumbnail name and move to a folder
            $filename = uniqid() . '_background_' . $file->getClientOriginalName();
            $decorations->decorations_thumb = $filename;

            if(!file_exists('picUploadTestDir/decorations/'))
            {
                mkdir('picUploadTestDir/decorations', 0777, true);
            }

            $file->move('picUploadTestDir/decorations/', $filename);

            //creating thumbnails of img

            $thumb = Image::make('picUploadTestDir/decorations/'. $filename)->resize(480, 360)->save('picUploadTestDir/decorations/' . $filename, 100);

            $oldThumbPath = 'picUploadTestDir/decorations/' . $request->oldThumb;

            if(file_exists($oldThumbPath))
            {
                unlink($oldThumbPath);
            }
        }

        $decorations->save();

        return back()->with('message', 'Decorations was updated successfully!');
    }

    public function delete(Decorations $decorations)
    {
        foreach($decorations->decorItems as $item)
        {
            $decorationsPhotos[] = $item->id;
        }

        $photoCheck = isset($decorationsPhotos) ? $decorationsPhotos: false;

        if(isset($photoCheck))
        {
            return back()->with('message', 'Decorations have some decoration items. Please delete all items!');
        }
        else
        {
            $thumb = 'picUploadTestDir/decorations/' . $decorations->decorations_thumb;

            if(file_exists($thumb))
            {
                unlink($thumb);
            }

            $decorations->delete();

            return back()->with('message', 'Decorations was deleted successfully!');
        }
    }

}
