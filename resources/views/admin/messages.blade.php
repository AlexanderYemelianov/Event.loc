@extends('layouts.app')

@section('content')

    <div>
        <a href="getAllMessages"><button class="btn btn-md btn-primary">All messages</button></a>
        <a href="getMessages"><button class="btn btn-md btn-primary">Unseen messages</button></a>
    </div>

    <br>

    <div class="panel panel-default">
        <div class="panel-heading">Messages</div>

        <div class="panel-body">
            <table class="table table-striped" style="width: 100%">
                <tr>
                    <td style="width: 10%">Name</td>
                    <td style="width: 20%">Email</td>
                    <td style="width: 45%">Message</td>
                    <td style="width: 15%">Date</td>
                    <td style="width: 10%">Status</td>
                </tr>

                @foreach($sortedMessages as $item)
                <tr>
                    <td><?=$item['name']?> <?=$item['last_name']?></td>
                    <td><?=$item['email']?></td>
                    <td><?=$item['message']?></td>
                    <td><?=$item['created_at']?></td>
                    <td>
                        @if($item['active'] === 0)
                            <p>Checked</p>
                            {{--Dont work cause Sass or Less--}}
                            {{--<span class="glyphicon glyphicon-ok" aria-hidden="true" class="sr-only"></span>--}}
                        @else
                            <a href="checkMessage/<?=$item['id']?>"><button class="btn btn-sm btn-info">Seen</button></a>
                        @endif
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>

@endsection