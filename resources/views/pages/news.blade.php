@extends('layout')

@section('content')

    <h3 align="center">События</h3>
    <p align="justify">Здесь размещены самые яркие предстоящие и прощедшие события.

        Подробный отчет можно найти на наших социальных страницах!
    </p>

    <p align="justify">P.S.: Помните, что мы всегда учитываем политику конфиденциальности и

        оговариваем с каждым заказчиком возможность размещения информации о

        проведенном мероприятии.
    </p><br>

    <div class="container" style="overflow: scroll; height: 300px; overflow-x:hidden;">
        <h4>Предстоящие</h4>
        @foreach($activeNews as $item)
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <img src="../picUploadTestDir/news/{{ $item->news_thumbnail }}" alt="{{ $item->news_name }}" class="img-responsive">
                </div>

                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <h4>{{ $item->news_name  }}</h4>
                    <small>{{ $item->news_date  }}</small>
                    <p align="justify">{!! nl2br($item->news_description) !!}</p>
                </div>
            </div>
            <br>
        @endforeach
    </div>

    <hr size="4">

    <div class="container" style="overflow: scroll; height: 300px; overflow-x:hidden;">
        <h4>Прошедшие</h4>
        @foreach($oldNews as $item)
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <img src="../picUploadTestDir/news/{{ $item->news_thumbnail }}" alt="{{ $item->news_name }}" class="img-responsive">
                </div>

                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <h4>{{ $item->news_name  }}</h4>
                    <small>{{ $item->news_date  }}</small>
                    <p align="justify">{!! nl2br($item->news_description)  !!}</p>
                </div>
            </div>
            <br>
        @endforeach
    </div>
@stop


