@extends('layouts.app')

@section('content')

    <h3>Here you can edit {{ $type->type_name }} </h3>
    <div class="col-lg-8 col-md-8 col-sm-4">
        <form action="/eventTypeUpdate/{{ $type->id }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="MAX_FILE_SIZE" value="1500000" />
            <input type="hidden" name="oldThumb" value="<?=$type->thumbnail;?>">

            <div class="form-group">
                <input type="text" name="type_name" required value="{{ $type->type_name }}" class="form-control">
            </div>

            <div class="form-group">
                <textarea name="description" class="form-control" required rows="8">{{ $type->description }}</textarea>
            </div>

            <div class="form-group">
                <input type="file" name="thumbnails" id="thumbnails">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Edit event type</button>
            </div>
        </form>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4">
        <img src="/picUploadTestDir/thumbnails/{{ $type->thumbnail  }}" class="img-responsive img-rounded" alt="{{ $type->thumbnail  }}">
    </div>


@endsection
