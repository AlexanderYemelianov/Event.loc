@extends('layout')

@section('content')

    <h3 align="center">Отзывы</h3>

    @foreach($reviews as $item)
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                @if(substr($item->review_visual_content, 0, 5) === 'https')
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="{{ $item->review_visual_content }}"></iframe>
                    </div>
                @else
                    <img class="img-responsive" src="../picUploadTestDir/reviewsImgs/{{ $item->review_visual_content }}"
                         alt="{{ substr($item->review_visual_content, 25)}}">
                @endif
            </div>

            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <strong>{{ $item->company_name }}</strong><br>
                <small>{{ $item->review_date }}</small><br>
                <p>{{ $item->reviewer_name }}, {{ $item->reviewer_position }}</p><br>
                <p align="justify">{{ $item->review_text }}</p>
            </div>
        </div>

        <br>
    @endforeach


@stop


