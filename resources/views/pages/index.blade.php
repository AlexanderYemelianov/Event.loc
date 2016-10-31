@extends('layout')

@section('head')

    {{--Slideswow script--}}

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>


    <style type="text/css">

        .slideshow-block{
            position: inherit;
            overflow: hidden;
            height: 250px;
            width: 250px;
            background: url('pictures/testpic/1.jpg');
            margin: 5px 5px 5px 5px;
        }

        a.link{
            position: inherit;
            display: block;
            z-index: 10;
        }
        a.link:hover{
            background-position: center -150px;
        }
        .slides{
            z-index:3;
            visibility:hidden;
        }
        .slides.active{
            visibility:visible;
        }

        ul{
            position: inherit;
            padding: 0 0 0 0;
        }

    </style>

    <script type="text/javascript">
        jQuery(function($){

            // Плагин Cycle
            $('.slides').cycle({
                fx:     'none',
                speed:   500,
                timeout: 70
            }).cycle("pause");

            // Пауза и старт при событии hover
            $('.slideshow-block').hover(function(){
                $(this).find('.slides').addClass('active').cycle('resume');
            }, function(){
                $(this).find('.slides').removeClass('active').cycle('pause');
            });

        });
    </script>


@endsection

@section('content')

    <div class="row">

        <h3 style="text-align: center">Корпаративные мероприятия</h3>

        @foreach($corpEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="eventTypeShow/{{ $type->id }}" target="_blank" class="link">
                    <style type="text/css"> .content{{ $type->id }}{background: url("picUploadTestDir/thumbnails/{{ $type->thumbnail }}");}</style>
                    <div align="center">
                        <div class="slideshow-block content{{ $type->id }}">
                            <ul class="slides">
                                @foreach($type->events as $event)
                                    <li><img src="picUploadTestDir/thumbnails/{{ $event->thumbnails }}"  alt="{{ $event->thumbnails }}" /></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <div class="row">

        <h3 style="text-align: center">Имиджевые мероприятия</h3>

        @foreach($fashionEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="eventTypeShow/{{ $type->id }}" target="_blank" class="link">
                    <style type="text/css"> .content{{ $type->id }}{background: url("picUploadTestDir/thumbnails/{{ $type->thumbnail }}");}</style>
                    <div align="center">
                        <div class="slideshow-block content{{ $type->id }}">
                            <ul class="slides">
                                @foreach($type->events as $event)
                                    <li><img src="picUploadTestDir/thumbnails/{{ $event->thumbnails }}"  alt="{{ $event->thumbnails }}" /></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>

    <div class="row">

        <h3 style="text-align: center">Частные мероприятия</h3>

        @foreach($privateEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="eventTypeShow/{{ $type->id }}" target="_blank" class="link">
                    <style type="text/css"> .content{{ $type->id }}{background: url("picUploadTestDir/thumbnails/{{ $type->thumbnail }}");}</style>
                    <div align="center">
                        <div class="slideshow-block content{{ $type->id }}">
                            <ul class="slides">
                                @foreach($type->events as $event)
                                    <li><img src="picUploadTestDir/thumbnails/{{ $event->thumbnails }}"  alt="{{ $event->thumbnails }}" /></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>


@stop



