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

        {{--First set--}}

        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding-bottom: 10px; position: relative;">

            <img src="../picUploadTestDir/newYear/1.jpg" style="height:100%; max-height: 400px; width: 100%; position: relative;" class="img-responsive">
            <div style="position: absolute; top: 200px; background: #ffffff; max-width: 300px;" align="center">
                <h4>Вечеринка в стиле супергероев.</h4>
                <p>Вперед за приключениями!</p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" >
            <div class="row" style="font-size: 15px;">

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding: 0 0;">
                    <img src="../picUploadTestDir/newYear/2.jpg" style="max-height: 200px; height: 100%;" class="img-responsive">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding: 0 0 ;" >
                    <h4>Вечеринка в стиле Гэтсби.</h4>
                    <p style="font-size: 15px;">
                        Чопорный дух Америки 20-х годов растворялся в безудержных празднествах, которые устраивали молодые «акулы бизнеса» с Уолл-стрит. Здесь нет места вульгарности, только изысканность, элегантность и блеск.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding-bottom: 10px;">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding: 0 0;">
                    <h4>Вечеринка в стиле «Социальных сетей»</h4>
                    <p>
                        Окунись в мир социальных сетей, собери больше всех лайков, стань звездой ю-туба и войди в 2017 самым продвинутым Юзером!
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding:0 0;">
                    <img src="../picUploadTestDir/newYear/3.jpg" style="max-height: 200px; height: 100%;" class="img-responsive">
                </div>
            </div>
        </div>


        {{--Second set--}}

        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding-bottom: 10px; position: relative;">

            <img src="../picUploadTestDir/newYear/4.jpg" style="height:100%; max-height: 400px; width: 100%; position: relative;" class="img-responsive">
            <div style="position: absolute; top: 200px; background: #ffffff; max-width: 300px;" align="center">
                <h4>Этно-вечеринка «Вождь краснокожих»</h4>
                <p style="font-size: 12px;">
                    Яркая боевая раскраска, индейские наряды, племенные истории в вигваме, противостояние бледнолицым-это все  Индейская вечеринка, легенды о которой будут жить  в вашей памяти и радовать вас на протяжении года.
                </p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" >
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding: 0 0;">
                    <img src="../picUploadTestDir/newYear/5.jpg" style="max-height: 200px; height: 100%;" class="img-responsive">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding: 0 0 ;" >
                    <h4>«Мексикана-пати»</h4>
                    <p style="font-size: 13px;">
                        Для того, чтобы побывать в Мексике, необязательно покупать путевку в турагентстве: достаточно просто устроить тематическую вечеринку, такую же зажигательную, как мексиканские танцы.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding-bottom: 10px;">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding: 0 0;">
                    <h4>Вечеринка с стили «Movie party».</h4>
                    <p style="font-size: 13px;">
                        Почему бы не почувствовать себя героями любимых кинолент и не организовать сумашедший  праздник, которому позавидует любой режиссер!
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding:0 0;">
                    <img src="../picUploadTestDir/newYear/6.jpg" style="max-height: 200px; height: 100%;" class="img-responsive">
                </div>
            </div>
        </div>


        {{--Third set--}}

        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding-bottom: 10px; position: relative;">

            <img src="../picUploadTestDir/newYear/7.jpg" style="height:100%; max-height: 400px; width: 100%; position: relative;" class="img-responsive">
            <div style="position: absolute; top: 200px; background: #ffffff; max-width: 300px;" align="center">
                <h4>Вечеринка в сказочном стиле «Алисы в зазеркалье»</h4>
                <p style="font-size: 13px;">
                     Немного детства,  доля безумия, капля абсурда и взрыв красок – вечеринка в стиле «Алиса в стране чудес» наверняка удивит даже искушенных и притязательных гостей!
                </p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" >
            <div class="row" style="font-size: 15px;">

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding: 0 0;">
                    <img src="../picUploadTestDir/newYear/8.jpg" style="max-height: 200px; height: 100%;" class="img-responsive">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding: 0 0 ;" >
                    <h4>Вечеринка в стиле «Вокруг света за 1 ночь»</h4>
                    <p style="font-size: 13px;">
                        Отправить глав Буха в Грецию?А отдел маркетинга в Аляску на золотоискательную операцию на собачьих упряжках? Легко!
                        Прочувствуйте колорит любой страны здесь и сейчас !
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding-bottom: 10px;">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding: 0 0;">
                    <h4>Вечеринка в стиле «Вечера на хуторе близ Диканьки»</h4>
                    <p style="font-size: 12px;">
                        Национальные традиции, конкурс вышиванок, дух предков, песни которые передаются из поколения в поколение, Солохины угощения и настоящий праздник живота-все это вас ждет вечером на хуторе близ Диканьки!
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding:0 0;">
                    <img src="../picUploadTestDir/newYear/9.jpeg" style="max-height: 200px; height: 100%;" class="img-responsive">
                </div>
            </div>
        </div>

        {{--Fourth set--}}

        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding-bottom: 10px; position: relative;">

            <img src="../picUploadTestDir/newYear/10.jpg" style="height:100%; max-height: 400px; width: 100%; position: relative;" class="img-responsive">
            <div style="position: absolute; top: 200px; background: #ffffff; max-width: 300px;" align="center">
                <h4>«ХАРД -РОК ПАТИ»</h4>
                <p style="font-size: 13px;">
                     Достала унылая попса? Зашкаливающая децибелами вечеринка в стиле рок – отличный способ развлечь друзей и всем вместе уйти в полный отрыв! Мотоциклы, гитары,тату-бар-вся мощь рок-стиля в одной вечеринке!
                </p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" >
            <div class="row" style="font-size: 15px;">

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding: 0 0;">
                    <img src="../picUploadTestDir/newYear/11.jpg" style="max-height: 200px; height: 100%;" class="img-responsive">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding: 0 0 ;" >
                    <h4>«Рай для гангстеров»</h4>
                    <p style="font-size: 13px;">
                        Запах пороха и опасности, шелест бумажных купюр, коварство и возмездие, реки крови и любовь, особенный, неповторимый шик — все это можно назвать атрибутами нашего праздника.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding-bottom: 10px;">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding: 0 0;">
                    <h4>Вечеринка в стиле «Сказочный город»</h4>
                    <p style="font-size: 12px;">
                        Только здесь можно помирить Белоснежку и злую Королеву, не умереть от отравленного яблока и станцевать вместе и волшебником страны ОЗ.
                        Веселитесь на празднике жизни в сказочном городе!
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="padding:0 0;">
                    <img src="../picUploadTestDir/newYear/12.jpg" style="max-height: 200px; height: 100%;" class="img-responsive">
                </div>
            </div>
        </div>

        {{--Mobile version--}}

        <div class="hidden-lg hidden-md hidden-sm col-xs-12">
            <div align="center">
                <img src="../picUploadTestDir/newYear/1.jpg" style="position: relative;" class="img-responsive">
                <h4>Вечеринка в стиле супергероев.</h4>
                <p>Вперед за приключениями!</p>
            </div>

            <div align="center">
                <img src="../picUploadTestDir/newYear/2.jpg" style="position: relative;" class="img-responsive">
                <h4>Вечеринка в стиле Гэтсби. </h4>
                <p>
                    Чопорный дух Америки 20-х годов растворялся в безудержных празднествах, которые устраивали молодые «акулы бизнеса» с Уолл-стрит. Здесь нет места вульгарности, только изысканность, элегантность и блеск.
                </p>
            </div>

            <div align="center">
                <img src="../picUploadTestDir/newYear/3.jpg" style="position: relative;" class="img-responsive">
                <h4>Вечеринка в стиле «Социальных сетей»</h4>
                <p>
                    Окунись в мир социальных сетей, собери больше всех лайков, стань звездой ю-туба и войди в 2017 самым продвинутым Юзером!
                </p>
            </div>

            <div align="center">
                <img src="../picUploadTestDir/newYear/4.jpg" style="position: relative;" class="img-responsive">
                <h4>Этно-вечеринка «Вождь краснокожих»</h4>
                <p>
                    Яркая боевая раскраска, индейские наряды, племенные истории в вигваме, противостояние бледнолицым-это все  Индейская вечеринка, легенды о которой будут жить  в вашей памяти и радовать вас на протяжении года.
                </p>
            </div>

            <div align="center">
                <img src="../picUploadTestDir/newYear/5.jpg" style="position: relative;" class="img-responsive">
                <h4>«Мексикана-пати»</h4>
                <p>
                    Для того, чтобы побывать в Мексике, необязательно покупать путевку в турагентстве: достаточно просто устроить тематическую вечеринку, такую же зажигательную, как мексиканские танцы.
                </p>
            </div>

            <div align="center">
                <img src="../picUploadTestDir/newYear/6.jpg" style="position: relative;" class="img-responsive">
                <h4>Вечеринка с стили «Movie party». </h4>
                <p>
                    Почему бы не почувствовать себя героями любимых кинолент и не организовать сумашедший  праздник, которому позавидует любой режиссер!
                </p>
            </div>

            <div align="center">
                <img src="../picUploadTestDir/newYear/7.jpg" style="position: relative;" class="img-responsive">
                <h4>Вечеринка в сказочном стиле « Алисы в зазеркалье»</h4>
                <p>
                     Немного детства,  доля безумия, капля абсурда и взрыв красок – вечеринка в стиле «Алиса в стране чудес» наверняка удивит даже искушенных и притязательных гостей!
                </p>
            </div>

            <div align="center">
                <img src="../picUploadTestDir/newYear/8.jpg" style="position: relative;" class="img-responsive">
                <h4>Вечеринка в стиле «Вокруг света за 1 ночь»</h4>
                <p>
                    Отправить глав Буха в Грецию?А отдел маркетинга в Аляску на золотоискательную операцию на собачьих упряжках? Легко!
                    Прочувствуйте колорит любой страны здесь и сейчас !
                </p>
            </div>

            <div align="center">
                <img src="../picUploadTestDir/newYear/9.jpeg" style="position: relative;" class="img-responsive">
                <h4>Вечеринка в стиле «Вечера на хуторе близ Диканьки»</h4>
                <p>
                    Национальные традиции, конкурс вышиванок, дух предков, песни которые передаются из поколения в поколение, Солохины угощения и настоящий праздник живота-все это вас ждет вечером на хуторе близ Диканьки!
                </p>
            </div>

            <div align="center">
                <img src="../picUploadTestDir/newYear/10.jpg" style="position: relative;" class="img-responsive">
                <h4>«ХАРД -РОК ПАТИ»</h4>
                <p>
                    Достала унылая попса? Зашкаливающая децибелами вечеринка в стиле рок – отличный способ развлечь друзей и всем вместе уйти в полный отрыв! Мотоциклы, гитары,тату-бар-вся мощь рок-стиля в одной вечеринке!
                </p>
            </div>

            <div align="center">
                <img src="../picUploadTestDir/newYear/11.jpg" style="position: relative;" class="img-responsive">
                <h4>«Рай для гангстеров»</h4>
                <p>
                    Запах пороха и опасности, шелест бумажных купюр, коварство и возмездие, реки крови и любовь, особенный, неповторимый шик — все это можно назвать атрибутами нашего праздника.
                </p>
            </div>

            <div align="center">
                <img src="../picUploadTestDir/newYear/12.jpg" style="position: relative;" class="img-responsive">
                <h4>Вечеринка в стиле « Сказочный город»</h4>
                <p>
                    Только здесь можно помирить Белоснежку и злую Королеву, не умереть от отравленного яблока и станцевать вместе и волшебником страны ОЗ.
                    Веселитесь на празднике жизни в сказочном городе!
                </p>
            </div>
        </div>
    </div>

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



