@extends('layout')

@section('content')

    <h3>{{ $gallery->gallery_name }}</h3>
    <small>{{$gallery->date}}</small>

    <div>
        <p align="justify">{!! nl2br($gallery->gallery_description) !!}</p>
    </div>

    <div class="row">
        @if($gallery->photos->count() >= 1)
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12" style="padding: 0 5px 10px 5px;">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="first-slide img-responsive" width="100%"
                                   src="../picUploadTestDir/gallery/{{ $gallery->thumbnail }}"
                                   alt="{{ substr($gallery->thumbnail, 25)}}">
                        </div>

                        @foreach($gallery->photos as $photo)
                            <div class="item">
                                <img class="img-responsive" width="100%"
                                   src="../picUploadTestDir/gallery/{{ $photo->photo_name }}"
                                   alt="{{ $photo->display_name }}">
                             </div>
                        @endforeach

                    </div>

                    <!--Arrows of slider-->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><!-- /.carousel -->
            </div>
        @else

        @endif

        @if($gallery->videos->count() >= 1)
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                    @foreach($gallery->videos as $video)
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $video->video_name }}"></iframe>
                        </div>
                    @endforeach
                </div>
            </div>
        @else

        @endif
    </div>
@stop


