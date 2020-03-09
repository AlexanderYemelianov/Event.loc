@extends('layout')

@section('content')


    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @if(Session::has('message'))
                <h3>{{ Session::get('message') }}</h3>
            @endif
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <address>
                {{$address}}<br>
                <abbr title="Phone">моб.тел:</abbr> {{$phone}}<br>
                Email:<a href="mailto:{{$contactEmail}}">{{$contactEmail}}</a>
            </address>

            <div class="embed-responsive embed-responsive-4by3" style="padding-bottom: 280px;">
                <iframe class="embed-responsive-item"
                        src="{{$googleMapLink}}" allowfullscreen style="max-height: 280px;"></iframe>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

            <h3>Форма обратной связи</h3>

            <form method="POST" action="/message">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input type="text"  class="form-control" placeholder="Ваше имя" required name="name"><br>

                <input type="text" class="form-control" placeholder="Ваша фамилия" required name="last_name"><br>

                <input type="email" class="form-control" placeholder="Контактный адрес электронной почты" required name="email"><br>

                <input type="text" class="form-control" placeholder="Контактный телефон"  name="phone"><br>

                <textarea  class="form-control" placeholder="Оставтье Ваше сообщение здесь" maxlength="500" required name="message"></textarea><br>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Send message</button>
                </div>

            </form>

        </div>
    </div>
@stop

