<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DecorItems;
use Image;

class DecorItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function itemAdd(Request $request)
    {
        $this->validate($request, [
            'item' => ['required'],
            'decorations_id' => ['required'],
        ]);

         //get all data from a form

        $newItem = new DecorItems();

        $newItem->decorations_id = $request->decorations_id;

        //get file from a request

        $file = $request->file('item');

        //set file name
        $filename = uniqid() .' - '. $file->getClientOriginalName() ;
        $newItem->item = $filename;

        //move file to correct location

        if(!file_exists('picUploadTestDir/decorations/'))
        {
            mkdir('picUploadTestDir/decorations/', 0777, true);
        }
        $file->move('picUploadTestDir/decorations/', $filename);


        $file = Image::make('picUploadTestDir/decorations/'. $filename)->resize(1024, 768)->save('picUploadTestDir/decorations/' . $filename, 100);

        //save img path to DB

        $newItem->save();

        return back()->with('message', 'Item was uploaded successfully!');
    }


    public function itemDelete(DecorItems $item)
    {
        $photoToDelete = 'picUploadTestDir/decorations/' . $item->item;
        if(file_exists($photoToDelete))
        {
            unlink($photoToDelete);
        }

        $item->delete();

        return back()->with('message', 'Item was deleted successfully!');
    }
}
