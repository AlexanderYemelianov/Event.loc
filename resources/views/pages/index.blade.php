@extends('layout')

@section('indexContent')

    <div class="row">

        <h3 style="text-align: center">Корпоративные мероприятия</h3>

        @foreach($teamBuilding as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 1px 1px 0 1px;">
                <a href="/teambuildingShow/{{ $type->id }}">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        @foreach($newYear as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 1px 1px 0 1px;">
                <a href="/newYearProgramShow">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        @foreach($conferences as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 1px 1px 0 1px;">
                <a href="/conferencesShow">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        @foreach($corpEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 1px 1px 0 1px;">
                <a href="/typeShow/{{ $type->id }}">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>

    <div class="row">

        <h3 style="text-align: center">Имиджевые мероприятия</h3>

        @foreach($fashionEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 1px 1px 0 1px;">
                <a href="/typeShow/{{ $type->id }}">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach


    </div>

    <div class="row">

        <h3 style="text-align: center">Частные мероприятия</h3>

        @foreach($privateEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 1px 1px 0 1px;">
                <a href="/typeShow/{{ $type->id }}">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach


    </div>

@stop



