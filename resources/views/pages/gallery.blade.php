@extends('layout')

@section('content')

    <h3 align="center">Галерея</h3>

    <div class="row">
        @foreach($galleries as $gallery)
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a href="/galleryShow/{{ $gallery->id }}">
                    <div class="hovereffect">
                        <img class="img-responsive" src="picUploadTestDir/gallery/{{ $gallery->thumbnail }}" alt="{{ substr($gallery->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $gallery->gallery_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>


@stop


