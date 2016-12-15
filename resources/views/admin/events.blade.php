@extends('layouts.app')

@section('content')

    <h3>Add new program to Teambilding / Тренинги (Otdoor)</h3>

    <form action="/addProgram" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="events_type_id" value="1">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

        <div class="form-group">
            <input type="text" name="event_name" required class="form-control" placeholder="Name of a new program">
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" required placeholder="Description of new program"></textarea>
        </div>


        <h5>Choose an image for a link</h5>
        <div class="form-group">
            <input type="file" name="thumbnails" id="thumbnails" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add new program</button>
        </div>

    </form>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped" style="width: 100%">
                <tr>
                    <td style="width: 15%">Event Name</td>
                    <td style="width: 70%">Description</td>
                    <td style="width: 6%">Edit</td>
                    <td style="width: 9%">Delete</td>
                </tr>

                @foreach($events as $item)

                <tr>
                    <td><?=$item['event_name'];?></td>
                    <td><?=nl2br(mb_substr($item['description'],0,200)) . '...';?></td>
                    <td>
                        <a href="editEvent/<?=$item['id'];?>"><button class="btn btn-sm btn-warning">Edit</button></a>
                    </td>
                    <td>
                        <a href="deleteEvent/<?=$item['id'];?>" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger">Delete</button></a>
                    </td>
                </tr>

                @endforeach

            </table>

        </div>
    </div>


@endsection
