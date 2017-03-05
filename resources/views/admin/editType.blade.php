@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">

            <h3>Here you can edit <b>{{ $type->type_name }}</b> </h3>

            <form action="/eventTypeUpdate/{{ $type->slug }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="hidden" name="oldThumb" value="{{ $type->thumbnail  }}">

                <div class="form-group">
                    <input type="text" name="type_name" required value="{{ $type->type_name }}" class="form-control">
                </div>

                <div class="form-group">
                    <textarea name="description" class="form-control" required rows="10">{{ $type->description }}</textarea>
                </div>

                <h5>Choose an image for a link</h5>
                <div class="form-group">
                    <input type="file" name="thumbnails" id="thumbnails" >
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit event type</button>
                </div>
            </form>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h3>Image</h3>
            <img src="/picUploadTestDir/thumbnails/{{ $type->thumbnail  }}" class="img-responsive img-rounded" alt="{{ $type->thumbnail  }}">
        </div>

    </div>

    <div class="row">

        <div class="col-lg 12 col-md-12 col-sm-12 col-xs0-12">

            <h3>Here you can edit photos of <b>{{ $type->type_name }}</b></h3>

            <form action="/addTypesPhoto" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="hidden" name="events_type_id" value="{{ $type->id }}">

                <div class="form-group">
                    <input type="file" name="photo" id="photo" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add photo</button>
                </div>

            </form>
        </div>

        @foreach($type->photos as $photo)

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="../picUploadTestDir/typesPhotos/{{ $photo->photo }}" class="img-responsive img-rounded" alt="{{ $photo->photo }}">
                <a href="/typesPhotoDelete/{{ $photo->id}}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger btn-block">Delete photo</button></a>
            </div>

        @endforeach
    </div>


@endsection
