@extends('layout')

@section('content')

    <h3>{{ $gallery->gallery_name }}</h3>
    <small>{{$gallery->date}}</small>

    <div>
        <p align="justify"><?=nl2br($gallery->gallery_description);?></p>
    </div>

<div class="row">

    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
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
                    <p align="center"><img class="first-slide img-responsive" width="100%" src="../picUploadTestDir/gallery/{{ $gallery->thumbnail }}" alt="{{ substr($gallery->thumbnail, 25)}}"></p>
                </div>

                @foreach($gallery->photos as $photo)
                    <div class="item">
                        <p align="center"><img class="img-responsive" width="100%" src="../picUploadTestDir/gallery/{{ $photo->photo_name }}" alt="{{ $photo->display_name }}" ></p>
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

</div>


@stop

