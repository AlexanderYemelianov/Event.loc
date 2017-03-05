@extends('layouts.app')

@section('content')

    <h3>Add new Decorations</h3>

    <form action="/decorations" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

        <div class="form-group">
            <input type="text" name="decorations_name" placeholder="Name of the a new decorations" class="form-control" required>
        </div>

        <div class="form-group">
            <textarea name="decorations_description" class="form-control" placeholder="Description of a decorations" required></textarea>
        </div>


        <div class="form-group">
            <input type="file" multiple="false" name="decorations_thumb" id="decorations_thumb" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add new decorations</button>
        </div>
    </form>

    <hr>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped" style="width: 100%">
                <tr>
                    <td style="width: 20%">Decorations Name</td>
                    <td style="width: 40%">Description</td>
                    <td style="width: 20%">Thumbnail</td>
                    <td style="width: 10%">Edit</td>
                    <td style="width: 10%">Delete</td>
                </tr>

                @foreach($decorations as $item)

                    <tr>
                        <td>{{ $item['decorations_name'] }}</td>
                        <td>{{ nl2br(mb_substr($item['decorations_description'],0,300)) . '...' }}</td>
                        <td><img src="picUploadTestDir/decorations/{{ $item['decorations_thumb'] }}" alt="{{ $item['decorations_name'] }}" class="img-responsive"></td>
                        <td>
                            <a href="decorations/{{ $item['id'] }}"><button class="btn btn-sm btn-warning">Edit</button></a>
                        </td>
                        <td>
                            <a href="deleteDecorations/{{ $item['id'] }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger">Delete</button></a>
                        </td>
                    </tr>

                @endforeach

            </table>
        </div>
    </div>


@endsection
