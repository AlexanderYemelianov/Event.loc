@extends('layouts.app')

@section('content')

    <h3>Add new photo</h3>

    <form action="/imgUpload" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MAX_FILE_SIZE" value="1500000" />

        <div class="form-group">
            <input type="text" name="display_name" required class="form-control" placeholder="Name of photo">
        </div>

        <div class="form-group">

            <select class="form-control" required name="events_id">
                <option value="0">Choose event</option>
                @foreach($eventsId as $item){ ?>
                <option value="<?=$item['id']?>"><?=$item['event_name']?></option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <textarea name="photo_description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <input type="file" multiple="false" name="fileToUpload" id="fileToUpload" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add new photo</button>
        </div>
    </form>

    <hr>

    <h3>Photo Gallery</h3>

    <div>
        <form action="/getPhotoForEvent" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <select class="form-control" style="width: 300px;" required name="events_id">
                <option value="0">Choose event for photo sort</option>
                <option value="all">Show all photos</option>
                @foreach($eventsId as $item){ ?>
                <option value="<?=$item['id']?>"><?=$item['event_name']?></option>
                @endforeach
            </select>

            <div class="form-group">
                <button type="submit"  style="width: 300px;" class="btn btn-primary">For for a specific event</button>
            </div>

        </form>
    </div>

    <br>

    <div class="row">

        @if(count($photos) == 0)

            <h3 align="center">There is no photo in this album</h3>

        @else
            @foreach($photos as $photo)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <img src="picUploadTestDir/{{ $photo->photo_name }}" class="img-responsive img-rounded" alt="{{ $photo->display_name }}">
                        <a href="photoDelete/{{ $photo->id }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger btn-block">Delete photo</button></a>
                        <p align="center">{{ $photo->display_name }}</p>
                        <p align="center">{{ $photo->photo_description }}</p>
                    </div>
            @endforeach
        @endif
    </div>

@endsection
