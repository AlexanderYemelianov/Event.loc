@extends('layout')

@section('content')

    <h3>{{ $type->type_name }}</h3>

    <div>
        <p align="justify"><?=nl2br($type->description);?></p>
    </div>

    <hr>

    <div class="row">
        @foreach($type->events as $item)

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 0 1px 0 1px;">
                <div class="hovereffect">
                    <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $item->thumbnails }}" alt="{{substr($item->thumbnails, 25)}}">
                    <div class="overlay">
                        <h2>{{ $item->event_name }}</h2>
                        <p>
                            <a href="/eventShow/{{ $item->id }}">Узнать больше </a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@stop

