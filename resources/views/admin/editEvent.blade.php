@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-8">

            <h3>Here you can update <b>{{ $event->event_name }}</b></h3>

            <form action="/eventUpdate/{{ $event->id }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="1500000" />
                <input type="hidden" name="oldThumb" value="{{ $event->thumbnails  }}">
                <input type="hidden" name="oldCollage" value="{{ $event->collage  }}">

                <div class="form-group">
                    <input type="text" name="event_name" class="form-control" value="{{ $event->event_name }}">
                </div>

                <div class="form-group">
                    <textarea name="description" class="form-control" rows="20">{{ $event->description }}</textarea>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h5>Choose an image for a link</h5>
                        <div class="form-group">
                            <input type="file" name="thumbnails" id="thumbnails" >
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h5>Choose a collage</h5>
                        <div class="form-group">
                            <input type="file" name="collage" id="collage" >
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

        <div class="col-lg-4 col-md-4 col-sm-4">
            <h3>Collage</h3>
            <img src="/picUploadTestDir/collages/{{ $event->collage  }}" class="img-responsive img-rounded" alt="{{ $event->collage  }}">
        </div>

    </div>

@endsection
