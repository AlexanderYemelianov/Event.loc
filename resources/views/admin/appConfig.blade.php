@extends('layouts.app')

@section('content')

    <h3>Application Configurations</h3>

    <form action="/saveConfig" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            @foreach($appConfigs as $item)
                <label for="{{ $item->config_code }}">{{ $item->config_name }}</label>
                <input type="text" required  class="form-control"
                       id="{{ $item->config_code }}"
                       name="{{ $item->config_code }}"
                       value="{{ $item->value }}">
            @endforeach
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save Configuration</button>
        </div>
    </form>

@endsection
