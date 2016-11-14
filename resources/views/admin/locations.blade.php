@extends('layouts.app')

@section('content')

    <h3>Add new Location</h3>

    <form action="/addLocation" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

        <div class="form-group">
            <input type="text" name="location_name" required class="form-control" placeholder="Name of a new Location">
        </div>

        <div class="form-group">
            <textarea name="location_description" class="form-control" required placeholder="Description of a new Location"></textarea>
        </div>

        <div class="form-group">
            <input type="file" name="location_collage" id="location_collage" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add new Location</button>
        </div>

    </form>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped" style="width: 100%">
                <tr>
                    <td style="width: 15%">Name</td>
                    <td style="width: 55%">Description</td>
                    <td style="width: 20%">Collage</td>
                    <td style="width: 10%">Delete</td>
                </tr>

                @foreach($locations as $location)

                <tr>
                    <td>{{ $location['location_name'] }}</td>
                    <td>{{ nl2br($location['location_description']) }}</td>
                    <td><img src="../picUploadTestDir/locations/{{ $location['location_collage'] }}" alt="{{ $location['location_collage'] }}" height="100px"></td>
                    <td>
                        <a href="deleteLocation/{{ $location['id'] }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger">Delete</button></a>
                    </td>
                </tr>

                @endforeach

            </table>

        </div>
    </div>


@endsection
