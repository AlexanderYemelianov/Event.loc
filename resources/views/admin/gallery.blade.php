@extends('layouts.app')

@section('content')

    <h3>Add new photo</h3>

    <form action="/addGallery" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

        <div class="form-group">
            <input type="text" name="gallery_name" placeholder="Name of the a new gallery" class="form-control" required>
        </div>

        <div class="form-group">
            <textarea name="gallery_description" class="form-control" placeholder="Description of a gallery" required></textarea>
        </div>

        <div class="form-group">
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="file" multiple="false" name="thumb" id="thumb" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add new gallery</button>
        </div>
    </form>

    <hr>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped" style="width: 100%">
                <tr>
                    <td style="width: 10%">Gallery Name</td>
                    <td style="width: 10%">Date</td>
                    <td style="width: 50%">Description</td>
                    <td style="width: 15%">Thumbnail</td>
                    <td style="width: 5%">Edit</td>
                    <td style="width: 10%">Delete</td>
                </tr>

                @foreach($galleries as $item)

                    <tr>
                        <td>{{ $item['gallery_name'] }}</td>
                        <td>{{ $item['date'] }}</td>
                        <td>{{ nl2br(mb_substr($item['gallery_description'],0,300)) . '...' }}</td>
                        <td><img src="picUploadTestDir/gallery/{{ $item['thumbnail'] }}" alt="{{ $item['thumbnail'] }}" height="100px"></td>
                        <td>
                            <a href="editGallery/{{ $item['id'] }}"><button class="btn btn-sm btn-warning">Edit</button></a>
                        </td>
                        <td>
                            <a href="deleteGallery/{{ $item['id'] }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger">Delete</button></a>
                        </td>
                    </tr>

                @endforeach

            </table>
        </div>
    </div>


@endsection
