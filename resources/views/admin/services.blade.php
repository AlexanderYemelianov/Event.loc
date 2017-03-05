@extends('layouts.app')

@section('content')

    <h3>Add new position to services table</h3>

    <form action="/services" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

        <div class="form-group">
            <input type="text" name="service" required class="form-control" placeholder="Service name">
        </div>

        <div class="form-group">
            <input type="text" name="price" required class="form-control" placeholder="Service price">
        </div>

        <div class="form-group">
            <textarea name="service_description" class="form-control" required placeholder="Service description"></textarea>
        </div>

        <h5>Choose image for this service</h5>
        <div class="form-group">
            <input type="file" name="service_photo" id="service_photo" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add new service</button>
        </div>

    </form>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped" style="width: 100%">
                <tr>
                    <td style="width: 15%">Service</td>
                    <td style="width: 45%">Service description</td>
                    <td style="width: 20%">Photo</td>
                    <td style="width: 10%">Price</td>
                    <td style="width: 10%">Delete</td>
                </tr>

                @foreach($services as $item)

                <tr>
                    <td><?=$item['service'];?></td>
                    <td><?=nl2br(mb_substr($item['service_description'],0,200)) . '...';?></td>
                    <td><img src="/picUploadTestDir/services/<?=$item['service_photo'];?>" alt="<?=$item['service_photo'];?>" class="img-responsive"></td>
                    <td><?=$item['price'];?></td>
                    <td>
                        <a href="deleteService/<?=$item['id'];?>" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger">Delete</button></a>
                    </td>
                </tr>

                @endforeach

            </table>

        </div>
    </div>


@endsection
