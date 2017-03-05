@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-8">

            <h3>Here you can update <b>{{ $event->event_name }}</b></h3>

            <form action="/eventUpdate/{{ $event->slug }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="1500000" />
                <input type="hidden" name="oldThumb" value="{{ $event->thumbnails  }}">
                <input type="hidden" name="oldCollage" value="{{ $event->collage  }}">

                <div class="form-group">
                    <input type="text" name="event_name" class="form-control" value="{{ $event->event_name }}">
                </div>

                <div class="form-group">
                    <textarea name="description" class="form-control" rows="15">{{ $event->description }}</textarea>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h5>Choose an image for a link</h5>
                        <div class="form-group">
                            <input type="file" name="thumbnails" id="thumbnails" >
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update program</button>
                </div>
            </form>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <h3>Image</h3>
            <img src="/picUploadTestDir/thumbnails/{{ $event->thumbnails  }}" class="img-responsive img-rounded" alt="{{ $event->thumbnails  }}">
        </div>
    </div>

        <hr>

    <div class="row">
        <h3 align="center">Here you can add photos</h3>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="/eventPhotoAdd" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="hidden" name="event_id" value="{{ $event->id }}">

                <div class="form-group">
                    <input type="file" name="photo" id="photo" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add photo</button>
                </div>
            </form>
        </div>

    </div>

    <div class="row">
        @foreach($event->photos as $photo)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="../picUploadTestDir/eventsPhoto/{{ $photo->photo }}" class="img-responsive img-rounded" alt="{{ $photo->photo }}">
                <a href="/eventPhotoDelete/{{ $photo->id}}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger btn-block">Delete photo</button></a>
            </div>
        @endforeach
    </div>

@endsection
