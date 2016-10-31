@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <h3>Add new events type</h3>

            <form action="/addNewType" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <input type="text" name="type_name" required class="form-control">
                </div>

                <div class="form-group">
                    <textarea name="description" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add new type</button>
                </div>

            </form>


            <form action="/imgupload" method="post" enctype="multipart/form-data" class="form-control">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="150000" />

                <div class="form-group">
                    <input type="file" min="1" max="30" multiple="true" name="fileToUpload" id="fileToUpload">
                </div>

                <div class="form-group">
                    <input type="submit" value="Upload Image" name="submit" class="btn btn-primary">
                </div>

            </form>

        </div>

    </div>

@endsection
