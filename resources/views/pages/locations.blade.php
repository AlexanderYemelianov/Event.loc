@extends('layout')

@section('content')

    <h3>Места</h3>

    @foreach($locations as $location)

        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <img src="../picUploadTestDir/locations/{{ $location->location_collage }}" class="img-responsive" alt="{{ $location->location_name }}">
            </div>

            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12"><br>
                <h3>{{ $location->location_name }}</h3>
                <p align="justify"><?=nl2br($location->location_description);?></p>
            </div>
        </div>

        <br>
    @endforeach


@stop



