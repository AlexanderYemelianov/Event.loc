@extends('layouts.app')

@section('content')

    <h3>Add new events type</h3>

    <form action="/addNewType" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

        <div class="form-group">
            <input type="text" name="type_name" required placeholder="Name of the new event type" class="form-control">
        </div>

        <div class="form-group">
            <input type="text" name="slug" required placeholder="slug that will be used in URL" class="form-control">
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" required placeholder="Description of new event type"></textarea>
        </div>

        <div class="form-group">

            <select class="form-control" required name="class">
                <option value="1">Корпаративные мероприятия</option>
                <option value="2">Имиджевые мероприятия</option>
                <option value="3">Частные мероприятия</option>
                <option value="4">Свадьбы</option>
            </select>

        </div>

        <h5>Choose an image for a link</h5>
        <div class="form-group">
            <input type="file" name="thumbnails" id="thumbnails" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add new type</button>
        </div>

    </form>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped" style="width: 100%">
                <tr>
                    <td style="width: 25%">Events Type</td>
                    <td style="width: 60%">Description</td>
                    <td style="width: 6%">Edit</td>
                    <td style="width: 9%">Delete</td>
                </tr>
                @foreach($eventsTypes as $item)

                <tr>
                    <td>{{ $item->type_name }}</td>
                    <td><?=nl2br(mb_substr($item['description'],0,200)) . '...';?></td>
                    <td>
                        <a href="eventTypeEdit/{{ $item->slug }}"><button class="btn btn-sm btn-warning">Edit</button></a>
                    </td>
                    <td>
                        @if($item->id > 3)
                            <a href="eventTypeDelete/{{ $item->slug }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger">Delete</button></a>
                        @else
                            <p>Static</p>
                        @endif
                    </td>
                </tr>

                @endforeach

            </table>
        </div>
    </div>

@endsection
