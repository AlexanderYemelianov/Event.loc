@extends('layouts.app')

@section('content')

    <h3>Add new program to New Year section</h3>

    <form action="/addNYProgram" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="events_type_id" value="1">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

        <div class="form-group">
            <input type="text" name="name" required class="form-control" placeholder="Name of a new NY program">
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" required placeholder="Description of new NY program"></textarea>
        </div>

        <div class="form-group">
            <input type="file" name="photo" id="photo" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add new NY program</button>
        </div>

    </form>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped" style="width: 100%">
                <tr>
                    <td style="width: 15%">Name</td>
                    <td style="width: 50%">Description</td>
                    <td style="width: 25%">Photo</td>
                    <td style="width: 10%">Delete</td>
                </tr>

                @foreach($newYearPrograms as $item)

                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <img class="img-responsive" src="../picUploadTestDir/newYearPhotos/{{ $item->photo }}" alt="{{ $item->photo }}" style="max-height: 100px;">
                    </td>
                    <td>
                        <a href="deleteNYProgram/{{ $item->id }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger">Delete</button></a>
                    </td>
                </tr>

                @endforeach

            </table>

        </div>
    </div>


@endsection
