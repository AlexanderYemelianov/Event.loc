@extends('layout')

@section('indexContent')


    <h3 align="center">Социальные проекты</h3>

    <div class="row">

        @foreach($socialProjects as $project)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding: 1px 1px 0 1px;">
                <a href="/projectShow/{{ $project->id }}">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/socialProjects/{{ $project->thumbnail }}" alt="{{ substr($project->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $project->project_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>

@stop



