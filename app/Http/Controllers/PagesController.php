<?php

namespace App\Http\Controllers;

use App\NewYear;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\EventsType;
Use App\Event;
Use App\Client;
use App\SocialProject;
use App\Gallery;
use App\Location;
use App\News;
use App\Review;

class PagesController extends Controller
{
    public function index()
    {

        $all = EventsType::all();

        $teamBuilding = $all->where('id', 1);

        $newYear = $all->where('id', 2);

        $conferences = $all->where('id', 3);

        $corpEvents = $all->where('class', 1);

        $fashionEvents = $all->where('class', 2);

        $privateEvents = $all->where('class', 3);


        return view('pages.index', compact('teamBuilding' ,'corpEvents','fashionEvents', 'privateEvents', 'newYear', 'conferences'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function news()
    {

        $allNews = News::all()->sortByDesc('news_date');

        $activeNews = $allNews->where('news_active', '!=', 0);

        $oldNews = $allNews->where('news_active', '=', 0);

        return view('pages.news', compact('activeNews', 'oldNews'));
    }

    public function clients()
    {
        $clients = Client::all();

        return view('pages.clients', compact('clients'));
    }

    public function socialProjects()
    {
        $socialProjects = SocialProject::all();

        return view('pages.socialProjects', compact('socialProjects'));
    }

    public function review()
    {
        $reviews = Review::all();

        return view('pages.reviews', compact('reviews'));
    }

    public function locations()
    {
        $locations = Location::all();

        return view('pages.locations', compact('locations'));
    }

    public function gallery()
    {
        $galleries = Gallery::all()->sortByDesc('date');

        return view('pages.gallery', compact('galleries'));
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function contactForm()
    {
        return view('pages.contactForm');
    }

    public function teambuildingShow(EventsType $type)
    {
        $type->load('events');

        return view('pages.teambuildingShow', compact('type'));
    }

    public function newYearProgramShow()
    {
        $newYearProgram = NewYear::all();

        return view('pages.newYearProgramShow', compact('newYearProgram'));
    }

    public function showType(EventsType $type)
    {
        return view('pages.showType', compact('type'));
    }

    public function showEvent(Event $event)
    {
        $events = Event::all()->where('id', '!=', $event->id);

        return view('pages.showEvent', compact('event', 'events'));
    }

    public function projectShow(SocialProject $project)
    {
        return view('pages.showProject', compact('project'));
    }

    public function galleryShow(Gallery $gallery)
    {
         return view('pages.galleryShow', compact('gallery'));
    }

}
