@extends('layout')

@section('content')

    <h3>{{ $decoration->decorations_name }}</h3>

    <div>
        <p align="justify">{{ nl2br($decoration->decorations_description) }}</p>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                @foreach($decoration->decorItems as $item)
                    <div class="col-md-3 col-sm-6 col-xs-12 decorations-containers">
                        <a href="/picUploadTestDir/decorations/{{ $item->item }}"><img class="img-responsive" src="../picUploadTestDir/decorations/{{ $item->item }}" alt="{{ $item->item }}"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop


