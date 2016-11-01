@extends('layout')

@section('indexContent')

    <div class="row">

        <h3 style="text-align: center">Корпаративные мероприятия</h3>

        @foreach($teamBuilding as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 0 1px 0 1px;">
                <div class="hovereffect">
                    <a href="/teambuildingShow/{{ $type->id }}">
                        <img class="img-responsive" src="picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

        @foreach($corpEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 0 1px 0 1px;">
                <div class="hovereffect">
                    <a href="/TypeShow/{{ $type->id }}">
                        <img class="img-responsive" src="picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row">

        <h3 style="text-align: center">Имиджевые мероприятия</h3>

        @foreach($fashionEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 0 1px 0 1px;">
                <div class="hovereffect">
                    <a href="/TypeShow/{{ $type->id }}">
                        <img class="img-responsive" src="picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

    </div>

    <div class="row">

        <h3 style="text-align: center">Частные мероприятия</h3>

        @foreach($privateEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 0 1px 0 1px;">
                <div class="hovereffect">
                    <a href="/TypeShow/{{ $type->id }}">
                        <img class="img-responsive" src="picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

    </div>

@stop



