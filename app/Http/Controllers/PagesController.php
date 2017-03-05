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
use App\Services;
use App\Decorations;

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

        $wedigsEvents = $all->where('class', 4);

        return view('pages.index', compact('teamBuilding' ,'corpEvents','fashionEvents', 'privateEvents', 'newYear', 'conferences', 'wedigsEvents'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function events()
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

    public function corporateNewYearProgram()
    {
        $newYearProgram = NewYear::all();

        return view('pages.corporateNewYearProgram', compact('newYearProgram'));
    }

    public function showType(EventsType $type)
    {
        return view('pages.showType', compact('type'));
    }

    public function eventShow(Event $event)
    {
        $events = Event::all()->where('id', '!=', $event->id);

        return view('pages.eventShow', compact('event', 'events'));
    }

    public function projectShow(SocialProject $project)
    {
        $photos = array();
        $videos = array();

        foreach($project->content as $content)
        {

            if(!empty($content->content) && substr($content->content,0,5) != 'https')
            {
                $photos[] = $content->content;

            }elseif(!empty($content->content))
            {
                $videos[] = $content->content;
            }
        }
        return view('pages.showProject', compact('project', 'photos', 'videos'));
    }

    public function galleryShow(Gallery $gallery)
    {
         return view('pages.galleryShow', compact('gallery'));
    }

    public function services()
    {
        $services = Services::all();

        return view('pages.services', compact('services'));
    }

    public function decorations()
    {
        $decorations = Decorations::all();

        return view('pages.decorations', compact('decorations'));
    }

    public function decorationShow(Decorations $decoration)
    {
        return view('pages.decorationShow', compact('decoration'));
    }

}
