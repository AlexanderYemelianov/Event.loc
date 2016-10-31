@extends('layouts.app')

@section('content')

    <h3>Add new events type</h3>

    <form action="/addNewType" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MAX_FILE_SIZE" value="1500000" />

        <div class="form-group">
            <input type="text" name="type_name" required placeholder="Name of the new event type" class="form-control">
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" required placeholder="Description of new event type"></textarea>
        </div>

        <div class="form-group">

            <select class="form-control" required name="class">
                <option value="1">Корпаративные мероприятия</option>
                <option value="2">Имиджевые мероприятия</option>
                <option value="3">Частные мероприятия</option>
            </select>

        </div>

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
                    <td style="width: 15%">Events Type</td>
                    <td style="width: 55%">Description</td>
                    <td style="width: 15%">Date</td>
                    <td style="width: 6%">Edit</td>
                    <td style="width: 9%">Edit/Delete</td>
                </tr>
                @foreach($eventsTypes as $item)

                <tr>
                    <td><?=$item['type_name'];?></td>
                    <td><?=nl2br(mb_substr($item['description'],0,200)) . '...';?></td>
                    <td><?=$item['created_at'];?></td>
                    <td>
                        <a href="eventTypeEdit/<?=$item['id'];?>"><button class="btn btn-sm btn-warning">Edit</button></a>
                    </td>
                    <td>
                        <a href="eventTypeDelete/<?=$item['id'];?>" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger">Delete</button></a>
                    </td>
                </tr>

                @endforeach

            </table>
        </div>
    </div>

@endsection
