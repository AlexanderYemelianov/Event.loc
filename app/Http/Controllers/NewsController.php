<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;
use Image;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addNews(Request $request)
    {
        $this->validate($request, [
            'news_name' => ['required'],
            'news_description' => ['required'],
            'news_date' => ['required'],
        ]);

        $news = new News($request->all());

        $thumb = $request->file('thumb');

        //set thumbnail name and move to a folder
        $thumbName = uniqid() . '_background_' . $thumb->getClientOriginalName();
        $news->news_thumbnail = $thumbName;

        if(!file_exists('picUploadTestDir/news/'))
        {
            mkdir('picUploadTestDir/news/', 0777, true);
        }

        $thumb->move('picUploadTestDir/news/', $thumbName);

        //creating thumbnails of img

        $thumb = Image::make('picUploadTestDir/news/'. $thumbName)->resize(480, 360)->save('picUploadTestDir/news/' . $thumbName, 100);

        $news->save();

        return back()->with('message', 'New event was created successfully!');
    }

    public function changeStatusNews(News $news)
    {
        $news->news_active = 0;

        $news->save();

        return back()->with('message', $news->news_name . ' was marked as not active!');
    }

    public function deleteNews(News $news)
    {

        $thumb = 'picUploadTestDir/news/' . $news->news_thumbnail;

        if(file_exists($thumb))
        {
            unlink($thumb);
        }

        $news->delete();

        return back()->with('message', 'Event was deleted successfully!');
    }
}
