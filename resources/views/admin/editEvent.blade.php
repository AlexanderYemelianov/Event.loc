@extends('layouts.app')

@section('content')

    <h3>Here you can update {{ $event->event_name }}</h3>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <form action="/eventUpdate/{{ $event->id }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="1500000" />
                <input type="hidden" name="oldThumb" value="<?=$event->thumbnails;?>">

                <div class="form-group">
                    <input type="text" name="event_name" class="form-control" value="{{ $event->event_name }}">
                </div>

                <div class="form-group">
                    <textarea name="description" class="form-control" rows="8">{{ $event->description }}</textarea>
                </div>

                <div class="form-group">
                    <input type="file" multiple="false" name="thumbnails" id="thumbnails">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update event</button>
                </div>
            </form>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <img src="/picUploadTestDir/thumbnails/{{ $event->thumbnails  }}" class="img-responsive img-rounded" alt="{{ $event->thumbnails  }}">
        </div>

    </div>

@endsection
