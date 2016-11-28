@extends('layout')

@section('content')

    <h3>Корпаративный Новый Год</h3>

    <p align="justify">
        Вы ещё думаете, насколько важна организация новогоднего корпоратива к приближающемуся Новому году? Если Вам дороги Ваши сотрудники, важен статус своей компании и желание людей работать у Вас во имя достижения общей цели, тогда он просто необходим! Такой семейный праздник, как Новый год, очень важно отметить в «тесном семейном» кругу своей компании – чтобы подвести итоги уходящего года и построить планы  на процветание компании в Новом году.
    </p><br>
    <p align="justify">
        Организация корпоративного Нового года под ключ от нашего агентства-это всегда приятный сюрприз для Ваших сотрудников. Мы всегда прорабатываем  уникальный сценарий, учитывая специфику работы и направление деятельности Вашей компании.  Новый год 2017-от агентства Event Lab - это химические элементы взрывоопасной смеси веселья, креатива и новых технологий проведения вашего мероприятия!
    </p><br>
    <p align="justify">
        Ты лучший, если у тебя есть Команда!
    </p><br>
    <p align="justify">
        Широкий спектр новогодних программ от самых простых задумок до стилизованных торжеств. Разработка  индивидуальных сценариев под ключ, программа лояльности и приятные бонусы-скидки!  Скажи привет новому, яркому и продуктивному 2017!
    </p><br>

    <div class="row">

        @foreach($newYearProgram as $program)

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding: 0 5px 10px 5px; position: relative;">

                <img  class="img-responsive" src="../picUploadTestDir/newYearPhotos/{{ $program->photo }}" alt="{{ $program->name }}" style="position: relative; height: 100%; width:100%;" class="img-responsive">
                <div style="position: absolute; top: 45%; background: #ffffff; max-width: 300px;" align="center">
                    <h4>{{ $program->name }}</h4>
                    <p style="font-size: 12px;">{{ $program->description }}</p>
                </div>
            </div>

        @endforeach
        
    {{--Button--}}

    <div class="row">

        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs" align="center" style="margin-top: 50px;">
            <a href="{{ url('/contactForm') }}" class="newYearButton fontMD">Заказать подробное описание программы!</a>
        </div>

        <div class="hidden-lg hidden-md col-sm-12 hidden-xs" align="center" style="margin-top: 50px;">
            <a href="{{ url('/contactForm') }}" class="newYearButton fontSM">Заказать подробное описание программы!</a>
        </div>

        <div class="hidden-lg hidden-md hidden-sm col-xs-12" align="center" style="margin-top: 50px;">
            <a href="{{ url('/contactForm') }}" class="newYearButton fontXS">Заказать подробное описание!</a>
        </div>
    </div>

@stop



