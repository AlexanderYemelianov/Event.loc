@extends('layout')

@section('indexContent')

    <div class="row">

        <h3>Корпоративные мероприятия</h3>

        @foreach($teamBuilding as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 events-container">
                <a href="/teambuildingShow/{{ $type->slug }}">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        @foreach($newYear as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 events-container">
                <a href="/corporateNewYearProgram">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        @foreach($conferences as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 events-container">
                <a href="/conferences">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        @foreach($corpEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 events-container">
                <a href="/typeShow/{{ $type->slug }}">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>

    <div class="row">

        <h3>Свадьбы</h3>

        @foreach($wedigsEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 events-container">
                <a href="/typeShow/{{ $type->slug }}">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>

    <div class="row">

        <h3>Имиджевые мероприятия</h3>

        @foreach($fashionEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 events-container">
                <a href="/typeShow/{{ $type->slug }}">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>

    <div class="row">

        <h3>Частные мероприятия</h3>

        @foreach($privateEvents as $type)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 events-container">
                <a href="/typeShow/{{ $type->slug }}">
                    <div class="hovereffect">
                        <img class="img-responsive" src="../picUploadTestDir/thumbnails/{{ $type->thumbnail }}" alt="{{ substr($type->thumbnail, 25)}}">
                        <div class="overlay">
                            <h2>{{ $type->type_name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 main-page-description">
                <p><b>Компания Event Lab (рус. Ивент Лаб)</b> – занимается организацией мероприятий в Киеве и по всей Украине. Агентство
                    по проведению мероприятий и ивентов Ивент лаб в Киеве, предлагает организацию и проведение ярких торжеств под
                    ключ разных форматов и концепций праздников.</p>
                <p>В перечень услуг компании EventLab в Киеве входит полный спектр организации мероприятий от частных праздников
                    до масштабных ивентов и фестивалей. Наш перечень состоит из таких направлений как:</p>
                <p> - Корпоративные мероприятия: Тимбилдинги, организация корпоративов, конференций и тренингов, новогодних
                    корпоративов, сезонных корпоративов, промо–акций, BTL–услуг, выездные корпоративные мероприятия.</p>
                <p> - Имиджевые: Открытие и презентации новых объектов, Бизнес- мероприятия для партнеров, встреча иностранных
                    партнеров.</p>
                <p> - Частные: Дни рождения, Юбилеи, организация Детских праздников, Организация сюрпризов (флеш-мобы, неожиданные
                    поздравления именинников, сюрпризы для любимых (предложение руки и сердца), розыгрыши.</p>
                <p> - Свадьбы: Полный цикл организации свадеб от Ивент лаб в Киеве. Полный цикл подготовки Свадьбы–мечты вместе с
                    EventLab – это торжество, которое отобразит все ваши желания и организация праздника станет самой приятной общей
                    заботой в жизни.</p>
                <p>Профессионалы праздничного дела Ивент Лаб – это команда ведущих, ивентеров, лучших музыкантов,
                    артистов, декораторов, флористов, поваров/кейтеринг /банкеты, аниматоров, координаторов, свадебных координаторов.
                    Отдыхайте на своём празднике и получайте удовольствие, а Ивент Лаб сделает ваше событие максимально комфортным
                    для вас и ваших гостей.</p>
            </div>
            <div class="col-md-12 slogan">
                We create. You celebrate.
                <br>Event Lab Киев.
            </div>
        </div>
    </div>


@stop



