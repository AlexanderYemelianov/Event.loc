@extends('layout')

@section('indexContent')

    <div class="row">

        <h3 style="text-align: center">Корпаративные мероприятия</h3>

        @foreach($teamBuilding as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 1px 1px 0 1px;">
                <div class="hovereffect">
                    <img class="img-responsive" src="picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{substr($type->thumbnail, 25)}}">
                    <div class="overlay">
                        <h2>{{ $type->type_name }}</h2>
                        <p>
                            <a href="/teambuildingShow/{{ $type->id }}">Узнать больше</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

        @foreach($newYear as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 1px 1px 0 1px;">
                <div class="hovereffect">
                    <img class="img-responsive" src="picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{substr($type->thumbnail, 25)}}">
                    <div class="overlay">
                        <h2>{{ $type->type_name }}</h2>
                        <p>
                            <a href="/newYearShow">Узнать больше</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

        @foreach($conferences as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 1px 1px 0 1px;">
                <div class="hovereffect">
                    <img class="img-responsive" src="picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{substr($type->thumbnail, 25)}}">
                    <div class="overlay">
                        <h2>{{ $type->type_name }}</h2>
                        <p>
                            <a href="/conferencesShow">Узнать больше</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach


        @foreach($corpEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 1px 1px 0 1px;">
                <div class="hovereffect">
                    <img class="img-responsive" src="picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{substr($type->thumbnail, 25)}}">
                    <div class="overlay">
                        <h2>{{ $type->type_name }}</h2>
                        <p>
                            <a href="/typeShow/{{ $type->id }}">Узнать больше</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row">

        <h3 style="text-align: center">Имиджевые мероприятия</h3>

        @foreach($fashionEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 1px 1px 0 1px;">
                <div class="hovereffect">
                    <img class="img-responsive" src="picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{substr($type->thumbnail, 25)}}">
                    <div class="overlay">
                        <h2>{{ $type->type_name }}</h2>
                        <p>
                            <a href="/typeShow/{{ $type->id }}">Узнать больше</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <div class="row">

        <h3 style="text-align: center">Частные мероприятия</h3>

        @foreach($privateEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 1px 1px 0 1px;">
                <div class="hovereffect">
                    <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                    <div class="overlay">
                        <h2>{{ $type->type_name }}</h2>
                        <p>
                            <a href="/typeShow/{{ $type->id }}">Узнать больше</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@stop



