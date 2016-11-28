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
                Киев, ул. Васильковская 30, оф. 407<br>
                <abbr title="Phone">моб.тел:</abbr> 050 250 4848<br>
                <abbr title="Phone">моб.тел:</abbr> 068 074 9797<br>
                Email:<a href="mailto:#">info@eventlab.com.ua</a>
            </address>

            <div class="embed-responsive embed-responsive-4by3" style="padding-bottom: 280px;">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.539042497462!2d30.48759045096451!3d50.39379097936683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c8dab3f4759d%3A0x67dced8fbfa28384!2z0LLRg9C70LjRhtGPINCS0LDRgdC40LvRjNC60ZbQstGB0YzQutCwLCAzMCwg0JrQuNGX0LI!5e0!3m2!1sru!2sua!4v1480089567899" allowfullscreen style="max-height: 280px;"></iframe>
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

