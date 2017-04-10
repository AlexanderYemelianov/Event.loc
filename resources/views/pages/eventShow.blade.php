@extends('layout')

@section('content')

    <h3 align="center">{{ $event->event_name }}</h3>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    {{--<ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>--}}
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="first-slide img-responsive" width="100%"
                                 src="../picUploadTestDir/thumbnails/{{ $event->thumbnails }}"
                                 alt="{{ $event->thumbnail }}">
                        </div>

                        @foreach($event->photos as $photo)
                            <div class="item">
                                <img class="img-responsive" width="100%"
                                     src="../picUploadTestDir/eventsPhoto/{{ $photo->photo }}"
                                     alt="{{ $photo->photo }}">
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
                </div>
        </div>

        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <p align="justify"><?=nl2br($event->description);?></p>
        </div>
    </div>

    <hr>
    <div class="row">
        @foreach($events as $item)

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 0 1px 0 1px;">
                <a href="/eventShow/{{ $item->slug }}">
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

