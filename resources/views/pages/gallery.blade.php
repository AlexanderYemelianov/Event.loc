@extends('layout')

@section('content')

    <h3>Gallery</h3>


    <!-- Carousel
================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        {{--<ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>--}}
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <p align="center"><img class="first-slide img-responsive" src="picUploadTestDir/first_photo_for_slide.jpg" alt="first_photo_for_slide"></p>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>First slide</h1>
                        <p>Here we go!!!</p>
                      </div>
                </div>
            </div>

            @foreach($photos as $photo)
                <div class="item">
                    <p align="center"><img class="img-responsive" src="picUploadTestDir/{{ $photo->photo_name }}" alt="{{ $photo->display_name }}" ></p>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>{{ $photo->display_name }}</h1>
                            <p>{{ $photo->photo_description }}</p>
                        </div>
                    </div>
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

@stop


