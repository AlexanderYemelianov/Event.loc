@extends('layout')

@section('content')

    <h3>{{ $type->type_name }}</h3>

    <div>
        <p align="justify">{{ strval(nl2br($type->description)) }}</p>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                @foreach($type->photos as $photo)
                    <div class="col-md-3 col-sm-6 col-xs-12 decorations-containers">
                        <a href="/picUploadTestDir/typesPhotos/{{ $photo->photo }}"><img class="img-responsive" src="../picUploadTestDir/typesPhotos/{{ $photo->photo }}" alt="{{ $photo->photo }}"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@stop

