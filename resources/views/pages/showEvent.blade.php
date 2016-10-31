@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $event->thumbnails }}" alt="{{ substr($event->thumbnails,24) }}">
        </div>

        <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">

            <h3>{{ $event->event_name }}</h3>

            <p align="justify"><?=nl2br($event->description);?></p>

        </div>
    </div>

    <hr>
    <div class="row">
        @foreach($events as $item)

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <a href="/eventShow/{{ $item->id }}"> <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $item->thumbnails }}" alt="{{ $item->event_name }}">
                <div style="height: 150px; border: outset lightgray; max-width: 250px;" align="center">
                    <br><br><h4 >{{ $item->event_name }}</h4>
                </div>
            </a>
        </div>
        @endforeach
    </div>

@stop

