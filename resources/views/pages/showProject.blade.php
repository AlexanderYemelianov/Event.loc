@extends('layout')

@section('content')

    <h3>{{ $project->project_name }}</h3>

    <div>
        <p align="justify">{{ nl2br($project->description) }}</p>
    </div>

    <hr>

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 style="padding: 0 5px 10px 5px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="first-slide img-responsive" width="100%"
                           src="../picUploadTestDir/socialProjects/{{ $project->thumbnail }}"
                           alt="{{ $project->thumbnail }}">
                    </div>

                    @foreach($photos as $photo)
                        <div class="item">
                            <img class="img-responsive" width="100%"
                               src="../picUploadTestDir/socialProjects/{{ $photo }}"
                               alt="{{ $photo }}">
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

    <hr>

    <div class="row">
        @foreach($videos as $video)
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $video }}"></iframe>
                </div>
            </div>
        @endforeach
    </div>
@stop

