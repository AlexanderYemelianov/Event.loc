@extends('layout')

@section('content')

    <h3>{{ $type->type_name }}</h3>

    <div>
        <p align="justify"><?=nl2br($type->description);?></p>
    </div>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">

            <!-- Carousel-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                {{--<ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>--}}
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <p align="center"><img class="first-slide img-responsive" width="100%" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}"></p>
                    </div>

                    @foreach($type->photos as $photo)
                        <div class="item">
                            <p align="center"><img class="img-responsive"  width="100%" src="../picUploadTestDir/typesPhotos/{{ $photo->photo }}" alt="{{ $photo->photo }}" ></p>
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

