@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">

            <h3>Here you can edit <b> {{  $gallery->gallery_name }}</b></h3>

            <form action="/galleryUpdate/ {{  $gallery->id }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="hidden" name="oldThumb" value="{{  $gallery->thumbnail }}">

                <div class="form-group">
                    <input type="text" name="gallery_name" required value="{{ $gallery->gallery_name }}" class="form-control">
                </div>

                <div class="form-group">
                    <input type="date" name="date" required value="{{ $gallery->date }}" class="form-control">
                </div>

                <div class="form-group">
                    <textarea name="gallery_description" class="form-control" required rows="10">{{ $gallery->gallery_description }}</textarea>
                </div>

                <div class="form-group">
                    <input type="file" name="thumbnail" id="thumbnail">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit event type</button>
                </div>
            </form>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <h3>Image</h3>
            <img src="/picUploadTestDir/gallery/{{  $gallery->thumbnail }}" class="img-responsive img-rounded" alt="">
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <h3>Here you can manage photos</h3>

            <form action="/imgUpload" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="hidden" name="gallery_id" value="{{  $gallery->id }}">

                <div class="form-group">
                    <input type="file" name="photo" id="photo" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add photo</button>
                </div>

            </form>

        </div>

        @foreach($gallery->photos as $photo)

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="../picUploadTestDir/gallery/{{ $photo->photo_name }}" class="img-responsive img-rounded" alt="{{ $photo->photo_name }}">
                <a href="/photoDelete/{{ $photo->id}}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger btn-block">Delete photo</button></a>
            </div>

        @endforeach
    </div>


@endsection
