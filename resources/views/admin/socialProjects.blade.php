@extends('layouts.app')

@section('content')

    <h3>Add new event</h3>

    <form action="/addProject" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

        <div class="form-group">
            <input type="text" name="project_name" required class="form-control" placeholder="Name of a social project">
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" required placeholder="Description of a social project"></textarea>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h5>Choose an image for a link</h5>
                <div class="form-group">
                    <input type="file" name="thumbnail" id="thumbnail" required>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h5>Choose a collage</h5>
                <div class="form-group">
                    <input type="file" name="collage" id="collage" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add new social project</button>
        </div>

    </form>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped" style="width: 100%">
                <tr>
                    <td style="width: 10%">Event Name</td>
                    <td style="width: 50%">Description</td>
                    <td style="width: 15%">Thumbnail</td>
                    <td style="width: 15%">Collage</td>
                    <td style="width: 10%">Delete</td>
                </tr>

                @foreach($socialProjects as $item)

                <tr>
                    <td>{{ $item['project_name'] }}</td>
                    <td>{{ nl2br(mb_substr($item['description'],0,300)) . '...' }}</td>
                    <td><img src="picUploadTestDir/socialProjects/{{ $item['thumbnail'] }}" alt="{{ $item['thumbnail'] }}" height="100px"></td>
                    <td><img src="picUploadTestDir/socialProjects/{{ $item['collage'] }}" alt="{{ $item['collage'] }}"  height="100px"></td>
                    <td>
                        <a href="deleteProject/{{ $item['id'] }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger">Delete</button></a>
                    </td>
                </tr>

                @endforeach

            </table>

        </div>
    </div>


@endsection
