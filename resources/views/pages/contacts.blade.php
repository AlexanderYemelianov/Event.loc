@extends('layout')

@section('content')


    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @if(Session::has('message'))
                <h3>{{ Session::get('message') }}</h3>
            @endif
        </div>

        <div class="col-md-6 col-md-offset-3">

            <h1>Contacts form</h1>

            <form method="POST" action="/message">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="text"  class="form-control" placeholder="First Name" required name="name"><br>

                    <input type="text" class="form-control" placeholder="Last Name" required name="last_name"><br>

                    <input type="email" class="form-control" placeholder="Email address" required name="email"><br>

                    <input type="text" class="form-control" placeholder="Contact phone"  name="phone"><br>

                    <textarea  class="form-control" placeholder="Leave your message here and we will cantact you as soon as possible" maxlength="500" required name="message">{{ old('message') }}</textarea><br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>

            </form>

        </div>
    </div>
@stop

