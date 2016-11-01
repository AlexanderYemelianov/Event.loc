@extends('layout')

@section('content')

    <h3>{{ $type->type_name }}</h3>

    <div>
        <p align="justify"><?=nl2br($type->description);?></p>
    </div>

    <hr>

    <div class="row">
        @foreach($type->events as $item)

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $item->thumbnails }}" alt="{{ $item->event_name }}">
                <div style="height: 150px; border: outset lightgray; max-width: 250px;" align="center">
                    <br><br><h4 >{{ $item->event_name }}</h4>
                </div>
            </div>
        @endforeach
    </div>

@stop

