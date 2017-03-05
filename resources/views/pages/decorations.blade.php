@extends('layout')

@section('indexContent')

    <h3 align="center">Галерея</h3>

    <div class="row">
        @foreach($decorations as $decoration)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 gallery-container">
                <a href="/decorationShow/{{ $decoration->id }}">
                    <div class="hovereffect">
                        <img class="img-responsive" src="picUploadTestDir/decorations/{{ $decoration->decorations_thumb }}" alt="{{ $decoration->decorations_name }}">
                        <div class="overlay">
                            <h2>{{ $decoration->decorations_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>


@stop


