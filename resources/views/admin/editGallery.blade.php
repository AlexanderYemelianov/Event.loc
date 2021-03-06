@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">

            <h3>Here you can edit <b> {{  $gallery->gallery_name }}</b> gallery</h3>

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
                    <button type="submit" class="btn btn-primary">Edit gallery</button>
                </div>
            </form>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <h3>Image</h3>
            <img src="/picUploadTestDir/gallery/{{  $gallery->thumbnail }}" class="img-responsive img-rounded" alt="{{ $gallery->gallery_name }}">
        </div>

    </div>

    <hr>

    <div class="row">

        <h3 align="center">Here you can add photos and video</h3>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="/videoUpload" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">

                <div class="form-group">
                    <input type="text" name="video_name" class="form-control" title="You can add video from YouTube / Share(Поделиться) / Embed(HTML-код) coping link from src='...video link...'." required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add video</button>
                </div>
            </form>
        </div>

        <div class="row">
            @foreach($gallery->photos as $photo)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <img src="../picUploadTestDir/gallery/{{ $photo->photo_name }}" class="img-responsive img-rounded" alt="{{ $photo->photo_name }}">
                    <a href="/photoDelete/{{ $photo->id}}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger btn-block">Delete photo</button></a>
                </div>
            @endforeach
        </div>

        <hr>

        <div class="row">
            @foreach($gallery->videos as $video)
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="{{ $video->video_name }}"></iframe>
                    </div>
                    <a href="/videoDelete/{{ $video->id }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger btn-block">Delete video</button></a>
                </div>
            @endforeach
        </div>

    </div>

@endsection
