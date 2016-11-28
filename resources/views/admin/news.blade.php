@extends('layouts.app')

@section('content')

    <h3>Add new photo</h3>

    <form action="/addNews" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MAX_FILE_SIZE" value="1500000" />

        <div class="form-group">
            <input type="text" name="news_name" placeholder="Name of a new event" class="form-control" required>
        </div>

        <div class="form-group">
            <textarea name="news_description" class="form-control" placeholder="Description of a new event" required></textarea>
        </div>

        <div class="form-group">
            <input type="date" name="news_date" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="file" name="thumb" id="thumb" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add new event</button>
        </div>
    </form>

    <hr>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped" style="width: 100%">
                <tr>
                    <td style="width: 10%">Name</td>
                    <td style="width: 10%">Date</td>
                    <td style="width: 45%">Description</td>
                    <td style="width: 15%">Thumbnail</td>
                    <td style="width: 10%">Status</td>
                    <td style="width: 10%">Delete</td>
                </tr>

                @foreach($news as $item)

                    <tr>
                        <td>{{ $item['news_name'] }}</td>
                        <td>{{ $item['news_date'] }}</td>
                        <td>{{ nl2br($item['news_description']) }}</td>
                        <td><img src="../picUploadTestDir/news/{{ $item['news_thumbnail'] }}" alt="{{ $item['news_name'] }}" height="100px"></td>
                        <td>
                            @if($item['news_active'])
                                <a href="/changeStatusNews/{{ $item['id'] }}"><button class="btn btn-sm btn-warning">Change</button></a>
                            @else
                                <p>Not active</p>
                            @endif
                        </td>
                        <td>
                            <a href="/deleteNews/{{ $item['id'] }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger">Delete</button></a>
                        </td>
                    </tr>

                @endforeach

            </table>
        </div>
    </div>


@endsection
