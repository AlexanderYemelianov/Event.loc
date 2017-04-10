<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'EventLab') }}</title>

        <link href="http://webfonts.ru/import/fontinsc.css" rel="stylesheet">

        <!-- Styles for images -->
        <link rel="stylesheet" type="text/css" href="../css/hovereffect.css" />

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/additionalLibs/magnific-popup/magnific-popup.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    </head>

    <body>

    <div id="app" style="overflow:hidden;">
        <nav class="navbar navbar-default navbar-static-top">

            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12" align="center">
                    <a class="navbar-brand" href="{{ url('home') }}">
                        <img src="../EventLab_logo_2-01.png" height="130px" width="90px">
                    </a>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" style="margin-top: 2%;" align="center">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span>Menu</span>
                        </button>

                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li {{ (Request::is('/') ? 'class=active' : '') }}><a href="{{ url('/') }}">Главная</a></li>
                                <li {{ (Request::is('about') ? 'class=active' : '') }}><a href="{{ url('/about') }}">О компании</a></li>
                                <li {{ (Request::is('news') ? 'class=active' : '') }}><a href="{{ url('/events') }}">События</a></li>
                                <li {{ (Request::is('clients') ? 'class=active' : '') }}><a href="{{ url('/clients') }}">Наши клиенты</a></li>
                                <li {{ (Request::is('socialProjects') ? 'class=active' : '') }}><a href="{{ url('/socialProjects') }}">Социальные проекты</a></li>
                                <li {{ (Request::is('gallery') ? 'class=active' : '') }}><a href="{{ url('/gallery') }}">Галерея</a></li>
                                <li {{ (Request::is('locations') ? 'class=active' : '') }}><a href="{{ url('/locations') }}">Места</a></li>
                                <li {{ (Request::is('review') ? 'class=active' : '') }}><a href="{{ url('/review') }}">Отзывы</a></li>
                                <li {{ (Request::is('ourServices') ? 'class=active' : '') }}><a href="{{ url('/ourServices') }}">Услуги/Цены</a></li>
                                <li {{ (Request::is('ourDecorations') ? 'class=active' : '') }}><a href="{{ url('/ourDecorations') }}">Декор/Аренда</a></li>
                                <li {{ (Request::is('contacts') ? 'class=active' : '') }}><a href="{{ url('/contacts') }}">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs" align="center" style="margin-top: 50px;">
                    <a href="{{ url('/contactForm') }}" class="customButton"/>Оставить заявку</a>
                </div>

                <div class="hidden-lg hidden-md hidden-sm col-xs-12" align="center" style="margin-top: 10px; margin-bottom: 20px;">
                    <a href="{{ url('/contactForm') }}" class="customButton"/>Оставить заявку</a>
                </div>

            </div>


        </nav>

        {{--Content section--}}

        <div class="container-fluid main-page">
            @yield('indexContent')
        </div>

        <div class="container">
            @yield('content')
        </div><br><br><br><br>

    </div>

        <div class="navbar-fixed-bottom row-fluid" style="background: #ffffff; height: 50px;">
            <div class="navbar-inner">
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                                <address style="font-size: 15px;">
                                    <abbr title="контактыне телефоны">Контакты:</abbr>
                                    (050) 250-4848 (068) 074-9797 <br>
                                    <a href="mailto:#">info@eventlab.com.ua</a>
                                </address>
                            </div>

                            {{--mobile footer--}}

                            <div class="hidden-lg hidden-md hidden-sm col-xs-6">
                                <address style="font-size: 10px;">
                                    <abbr title="контактыне телефоны">Контакты:</abbr><br>
                                    (050) 250-4848 (068) 074-9797 <br>
                                    <a href="mailto:#">info@eventlab.com.ua</a>
                                </address>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" align="right" style="padding-top: 5px;">
                                <a href="https://vk.com/labkiev" target="_blank"><img src="../iconz/vk_2.png" alt="VK" height="40px"></a>
                                <a href="https://www.facebook.com/EventLabKiev?fref=ts" target="_blank"><img src="../iconz/facebook.png" alt="Facebook" height="40px"></a>
                                <a href="https://www.instagram.com/event_lab_kiev" target="_blank"><img src="../iconz/instagram.png" alt="Instagram" height="40px"></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/common.js"></script>
    <script src="/additionalLibs/magnific-popup/jquery.magnific-popup.min.js"></script>

    </body>
</html>

