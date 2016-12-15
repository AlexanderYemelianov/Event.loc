@extends('layouts.app')

@section('content')

    <h3>Add new Social event</h3>

    <form action="/addProject" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

        <div class="form-group">
            <input type="text" name="project_name" required class="form-control" placeholder="Name of a social project">
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" required placeholder="Description of a social project"></textarea>
        </div>

        <div class="form-group">
            <input type="file" name="thumbnail" id="thumbnail" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add new social project</button>
        </div>

    </form>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped" style="width: 100%">
                <tr>
                    <td style="width: 15%">Project Name</td>
                    <td style="width: 50%">Description</td>
                    <td style="width: 15%">Thumbnail</td>
                    <td style="width: 10%">Edit</td>
                    <td style="width: 10%">Delete</td>
                </tr>

                @foreach($socialProjects as $item)

                    <tr>
                        <td>{{ $item['project_name'] }}</td>
                        <td>{{ nl2br(mb_substr($item['description'],0,300)) . '...' }}</td>
                        <td><img src="picUploadTestDir/socialProjects/{{ $item['thumbnail'] }}" alt="{{ $item['thumbnail'] }}" height="100px"></td>
                        <td>
                            <a href="editSocialProject/{{ $item['id'] }}"><button class="btn btn-sm btn-warning">Edit</button></a>
                        </td>
                        <td>
                            <a href="deleteSocialProject/{{ $item['id'] }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger">Delete</button></a>
                        </td>
                    </tr>

                @endforeach

            </table>
        </div>
    </div>


@endsection
