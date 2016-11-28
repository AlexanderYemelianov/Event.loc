@extends('layout')

@section('content')

    <h3>{{ $project->project_name }}</h3>

    <div>
        <p align="justify"><?=nl2br($project->description);?></p>
    </div>

    <hr>

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
            <img src="../picUploadTestDir/socialProjects/{{ $project->collage }}" alt="{{ $project->collage }}" class="img-responsive">
        </div>
    </div>

@stop

