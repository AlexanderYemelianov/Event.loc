@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="getAllMessages"><button class="btn btn-md btn-primary">All messages</button></a>
            <a href="getMessages"><button class="btn btn-md btn-primary">Unseen messages</button></a>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h4 class="text-right">Press 'Crtl+F' to start searching</h4>
        </div>
    </div>

    <br>

    <div class="panel panel-default">
        <div class="panel-heading">Messages</div>

        <div class="panel-body">
            <table class="table table-striped" style="width: 100%">
                <tr>
                    <td style="width: 10%">Name</td>
                    <td style="width: 15%">Email</td>
                    <td style="width: 10%">Phone</td>
                    <td style="width: 40%">Message</td>
                    <td style="width: 15%">Date</td>
                    <td style="width: 5%">Status</td>
                    <td style="width: 5%">Delete</td>
                </tr>

                @foreach($sortedMessages as $item)
                <tr>
                    <td>{{ $item->name }} {{ $item->last_name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->message }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        @if( $item->active === 0)
                            <p>Checked</p>
                            {{--Dont work cause Sass or Less--}}
                            {{--<span class="glyphicon glyphicon-ok" aria-hidden="true" class="sr-only"></span>--}}
                        @else
                            <a href="checkMessage/<?=$item['id']?>"><button class="btn btn-sm btn-info">Checked</button></a>
                        @endif
                    </td>
                    <td>
                        <a href="deleteMessage/{{ $item->id }}" onclick="return confirmDelete();"><button class="btn btn-sm btn-danger">Delete</button></a>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>

@endsection