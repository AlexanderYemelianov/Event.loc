@extends('layout')

@section('content')


    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @if(Session::has('message'))
                <h3>{{ Session::get('message') }}</h3>
            @endif
        </div>

        <div class="col-md-6 col-md-offset-3">

            <h1>Contact form</h1>

            <form method="POST" action="/message">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input type="text"  class="form-control" placeholder="Ваше имя" required name="name"><br>

                <input type="text" class="form-control" placeholder="Ваша фамилия" required name="last_name"><br>

                <input type="email" class="form-control" placeholder="Контактный адрес электронной почты" required name="email"><br>

                <input type="text" class="form-control" placeholder="Контактный телефон"  name="phone"><br>

                <textarea  class="form-control" placeholder="Оставтье Ваше сообщение здесь" maxlength="500" required name="message"></textarea><br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>

            </form>

        </div>
    </div>
@stop

