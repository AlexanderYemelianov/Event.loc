@extends('layouts.app')

@section('content')

    <h3>Add new review</h3>

    <form action="/addReview" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MAX_FILE_SIZE" value="1500000" />

        <div class="form-group">
            <input type="text" name="company_name" placeholder="Customers company name" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="text" name="reviewer_name" placeholder="Reviewer name" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="text" name="reviewer_position" placeholder="Reviewer position" class="form-control" required>
        </div>

        <div class="form-group">
            <textarea name="review_text" class="form-control" placeholder="Review text" required></textarea>
        </div>

        <div class="form-group">
            <input type="date" name="review_date" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="text" name="review_visual_content" placeholder="Here you can add video link from Youtube" class="form-control" title="You can add video from YouTube / Share(Поделиться) / Embed(HTML-код) coping link from src='...video link...'.">
        </div>

        <div class="form-group">
            <input type="file" name="thumb" id="thumb">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add new review</button>
        </div>
    </form>

    <hr>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped" style="width: 100%">
                <tr>
                    <td style="width: 10%">Company</td>
                    <td style="width: 10%">Name</td>
                    <td style="width: 10%">Position</td>
                    <td style="width: 10%">Date</td>
                    <td style="width: 30%">Review</td>
                    <td style="width: 20%">Thumb/Video</td>
                    <td style="width: 10%">Delete</td>
                </tr>

                @foreach($reviews as $item)

                    <tr>
                        <td>{{ $item['company_name'] }}</td>
                        <td>{{ $item['reviewer_name'] }}</td>
                        <td>{{ $item['reviewer_position'] }}</td>
                        <td>{{ $item['review_date'] }}</td>
                        <td>{{ nl2br($item['review_text']) }}</td>
                        <td>
                            @if( preg_match("/youtube/",$item['review_visual_content']) )
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="{{ $item->review_visual_content }}"></iframe>
                                </div>
                            @else
                                <img src="../picUploadTestDir/reviewsImgs/{{ $item['review_visual_content'] }}" alt="{{ $item['review_visual_content'] }}" class="img-responsive">
                            @endif
                        </td>
                        <td>
                            <a href="/deleteReview/{{ $item['id'] }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger">Delete</button></a>
                        </td>
                    </tr>

                @endforeach

            </table>
        </div>
    </div>


@endsection
