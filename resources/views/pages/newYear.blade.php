@extends('layout')

@section('content')

    <h3>New year</h3>

    <p align="justify">
        Вы ещё думаете, насколько важна организация новогоднего корпоратива к приближающемуся Новому году? Если Вам дороги Ваши сотрудники, важен статус своей компании и желание людей работать у Вас во имя достижения общей цели, тогда он просто необходим! Такой семейный праздник, как Новый год, очень важно отметить в «тесном семейном» кругу своей компании – чтобы подвести итоги уходящего года и построить планы  на процветание компании в Новом году.
    </p><br>
    <p align="justify"> Организация корпоративного Нового года под ключ от нашего агентства-это всегда приятный сюрприз для Ваших сотрудников. Мы всегда прорабатываем  уникальный сценарий, учитывая специфику работы и направление деятельности Вашей компании.   Новый год 2017-от агентства Event Lab- это химические элементы взрывоопасной смеси веселья, креатива и новых технологий проведения вашего мероприятия!
    </p><br>
    <p align="justify">
        Ты лучший, если у тебя есть Команда!
    </p>

    <div class="row">

        {{--First set--}}

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 10px; position: relative;">

            <img src="../picUploadTestDir/newYear/1.jpg" style="max-height: 400px; width: 100%; position: relative;" class="img-responsive">
            <div style="position: absolute; top: 200px; background: #ffffff; max-width: 300px;" align="center">
                <p>Яркая боевая раскраска, индейские наряды, племенные истории в вигваме, противостояние бледнолицым-это все  Индейская вечеринка, легенды о которой будут жить  в вашей памяти и радовать вас на протяжении года.</p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0 0;">
                    <img src="../picUploadTestDir/newYear/2.jpg" style="max-height: 200px; height: 100%;" class="img-responsive">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0 0 ;" >
                    <br><p>Test description</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 10px;">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0 0;">
                    <br><p>Test description</p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding:0 0;">
                    <img src="../picUploadTestDir/newYear/3.jpg" style="max-height: 200px; height: 100%;" class="img-responsive">
                </div>
            </div>
        </div>


        {{--Second set--}}

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 10px;">
            <img src="../picUploadTestDir/newYear/1.jpg" style="max-height: 400px; width: 100%;" class="img-responsive">
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0 0;">
                    <img src="../picUploadTestDir/newYear/2.jpg" style="max-height: 200px; height: 100%;" class="img-responsive">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0 0;">
                    <br><p>Test description</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 10px;">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0 0;">
                    <br><p>Test description</p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0 0;">
                    <img src="../picUploadTestDir/newYear/3.jpg" style="max-height: 200px; height: 100%;" class="img-responsive">
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs" align="center" style="margin-top: 50px;">
            <a href="{{ url('/contactForm') }}" class="newYearButton fontMD">Заказать подробное описание программы!</a>
        </div>

        <div class="hidden-lg hidden-md col-sm-12 hidden-xs" align="center" style="margin-top: 50px;">
            <a href="{{ url('/contactForm') }}" class="newYearButton fontSM">Заказать подробное описание программы!</a>
        </div>

        <div class="hidden-lg hidden-md hidden-sm col-xs-12" align="center" style="margin-top: 50px;">
            <a href="{{ url('/contactForm') }}" class="newYearButton fontXS">Заказать подробное описание программы!</a>
        </div>
    </div>

@stop



