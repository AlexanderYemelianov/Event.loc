<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Gallery;
use Image;

class GalleriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addGallery(Request $request)
    {
        $this->validate($request, [
            'gallery_name' => ['required'],
            'gallery_description' => ['required'],
            'date' => ['required'],
        ]);

        $newGallery = new Gallery($request->all());

        $thumb = $request->file('thumb');

        //set thumbnail name and move to a folder
        $thumbName = uniqid() . '_background_' . $thumb->getClientOriginalName();
        $newGallery->thumbnail = $thumbName;

        if(!file_exists('picUploadTestDir/gallery/'))
        {
            mkdir('picUploadTestDir/gallery/', 0777, true);
        }

        $thumb->move('picUploadTestDir/gallery/', $thumbName);

        //creating thumbnails of img

        $thumb = Image::make('picUploadTestDir/gallery/' . $thumbName)->resize(1024, 768)->save('picUploadTestDir/gallery/' . $thumbName, 100);

        $newGallery->save();

        return back()->with('message', 'New gallery was created successfully!');
    }

    public function deleteGallery(Gallery $gallery)
    {

        foreach($gallery->photos as $photo)
        {
            $galleriesPhotos[] = $photo->id;
        }

        $photoCheck = isset($galleriesPhotos) ? $galleriesPhotos: false;

        if(!empty($photoCheck))
        {
            return back()->with('message', 'Gallery have some photo. Please delete all photo from Gallery!');
        }
        else
        {
            $thumb = 'picUploadTestDir/gallery/' . $gallery->thumbnail;

            if(file_exists($thumb))
            {
                unlink($thumb);
            }

            $gallery->delete();

            return back()->with('message', 'Gallery was deleted successfully!');
        }

    }

    public function editGallery(Gallery $gallery)
    {
        return view('admin.editGallery', compact('gallery'));
    }

    public function galleryUpdate(Request $request,Gallery  $gallery)
    {
        $gallery->gallery_name = $request->gallery_name;
        $gallery->gallery_description = $request->gallery_description;
        $gallery->date = $request->date;

        $file = $request->file('thumbnail');

        if(isset($file))
        {
            //set thumbnail name and move to a folder
            $filename = uniqid() . '_background_' . $file->getClientOriginalName();
            $gallery->thumbnail = $filename;

            if(!file_exists('picUploadTestDir/gallery/'))
            {
                mkdir('picUploadTestDir/gallery', 0777, true);
            }

            $file->move('picUploadTestDir/gallery/', $filename);

            //creating thumbnails of img

            $thumb = Image::make('picUploadTestDir/gallery/'. $filename)->resize(480, 360)->save('picUploadTestDir/gallery/' . $filename, 100);

            $oldThumbPath = 'picUploadTestDir/gallery/' . $request->oldThumb;

            if(file_exists($oldThumbPath))
            {
                unlink($oldThumbPath);
            }
        }

        $gallery->update();

        return back()->with('message', 'Gallery was updated successfully!');
    }
}
