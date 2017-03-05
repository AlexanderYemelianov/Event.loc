@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">

            <h3>Here you can edit <b> {{ $decorations->decorations_name }}</b> gallery</h3>

            <form action="/decorations/{{ $decorations->id }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="hidden" name="oldThumb" value="{{  $decorations->decorations_thumb }}">
                <input name="_method" type="hidden" value="PUT">

                <div class="form-group">
                    <input type="text" name="decorations_name" required value="{{ $decorations->decorations_name }}" class="form-control">
                </div>

                <div class="form-group">
                    <textarea name="decorations_description" class="form-control" required rows="10">{{ $decorations->decorations_description }}</textarea>
                </div>

                <div class="form-group">
                    <input type="file" name="decorations_thumb" id="decorations_thumb">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit decoration</button>
                </div>
            </form>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <h3>Image</h3>
            <img src="/picUploadTestDir/decorations/{{  $decorations->decorations_thumb }}" class="img-responsive img-rounded" alt="{{ $decorations->decorations_name }}">
        </div>

    </div>

    <hr>

    <div class="row">

        <h3 align="center">Here you can add decoration items</h3>

        <div class="col-md-12">
            <form action="/decorItemAdd" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="hidden" name="decorations_id" value="{{  $decorations->id }}">

                <div class="form-group">
                    <input type="file" name="item" id="item" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add decoration item</button>
                </div>
            </form>
        </div>

        <div class="row">
            @foreach($decorations->decorItems as $item)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <img src="../picUploadTestDir/decorations/{{ $item->item }}" class="img-responsive img-rounded" alt="{{ $item->item }}">
                    <a href="/decorItemDelete/{{ $item->id}}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger btn-block">Delete item</button></a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
