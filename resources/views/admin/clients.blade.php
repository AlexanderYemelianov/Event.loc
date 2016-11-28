@extends('layouts.app')

@section('content')

    <h3>Add new photo</h3>

    <form action="/addClients" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MAX_FILE_SIZE" value="1500000" />

        <div class="form-group">
            <input type="text" name="name" required class="form-control" placeholder="Clients name">
        </div>

        <div class="form-group">
            <input type="file" multiple="false" name="logo" id="logo" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add new client</button>
        </div>
    </form>

    <hr>

    <h3>Our Clients</h3>

    <div class="row">

        @foreach($clients as $client)
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img src="../picUploadTestDir/clientsLogo/{{ $client->logo }}" class="img-responsive" alt="{{ $client->name }}">
                <a href="/deleteClient/{{ $client->id }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger btn-block">Delete client</button></a>
            </div>
        @endforeach

    </div>


@endsection
