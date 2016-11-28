@extends('layout')

@section('content')

    <div align="center">
        <h3>Наши клиенты</h3>
    </div>

    <div class="row">

        @foreach($clients as $client)
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img src="../picUploadTestDir/clientsLogo/{{ $client->logo }}" class="img-responsive" alt="{{ $client->name }}">
            </div>
        @endforeach

    </div>

@stop

