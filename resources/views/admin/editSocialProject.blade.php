@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">

            <h3>Here you can edit <b> {{ $project->project_name }}</b></h3>

            <form action="/socialProjectUpdate/ {{ $project->id }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="hidden" name="oldThumb" value="{{ $project->thumbnail }}">

                <div class="form-group">
                    <input type="text" name="project_name" required value="{{ $project->project_name }}" class="form-control">
                </div>

                <div class="form-group">
                    <textarea name="description" class="form-control" required rows="10">{{ $project->description }}</textarea>
                </div>

                <div class="form-group">
                    <input type="file" name="thumbnail" id="thumbnail">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit Social Project</button>
                </div>
            </form>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <h3>Image</h3>
            <img src="/picUploadTestDir/socialProjects/{{ $project->thumbnail }}" class="img-responsive img-rounded" alt="">
        </div>

    </div>

    <hr>

    <div class="row">

        <h3 align="center">Here you can add photos and video</h3>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="/socialProjectPhotoAdd" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="hidden" name="social_project_id" value="{{ $project->id }}">

                <div class="form-group">
                    <input type="file" name="photo" id="photo" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add photo</button>
                </div>
            </form>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="/socialProjectVideoAdd" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="social_project_id" value="{{ $project->id }}">

                <div class="form-group">
                    <input type="text" name="content" id="content" class="form-control" title="You can add video from YouTube / Share(Поделиться) / Embed(HTML-код) coping link from src='...video link...'." required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add video</button>
                </div>
            </form>
        </div>

        <div class="row">
            @foreach($project->content as $content)

                @if(substr($content->content, 0, 5) != 'https')
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <img src="../picUploadTestDir/socialProjects/{{ $content->content }}" class="img-responsive img-rounded" alt="{{ $content->content }}">
                        <a href="/socialProjectPhotoDelete/{{ $content->id}}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger btn-block">Delete photo</button></a>
                    </div>
                @else
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="{{ $content->content }}"></iframe>
                        </div>
                        <a href="/socialProjectVideoDelete/{{ $content->id }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger btn-block">Delete video</button></a>
                    </div>
                @endif
            @endforeach
        </div>

    </div>

@endsection
