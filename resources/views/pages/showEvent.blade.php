@extends('layout')

@section('content')

    <h3 align="center">{{ $event->event_name }}</h3>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
            <img class="img-responsive" src="../picUploadTestDir/collages/{{ $event->collage }}" alt="{{ substr($event->thumbnails,24) }}">
        </div>

        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6">
            <p align="justify"><?=nl2br($event->description);?></p>
        </div>
    </div>

    <hr>
    <div class="row">
        @foreach($events as $item)

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 0 1px 0 1px;">
                <a href="/eventShow/{{ $item->id }}">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $item->thumbnails }}" alt="{{substr($item->thumbnails, 25)}}">
                        <div class="overlay">
                            <h2>{{ $item->event_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>

        @endforeach
    </div>

@stop

