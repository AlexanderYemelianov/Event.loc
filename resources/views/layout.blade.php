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

        <!-- Latest compiled and minified JavaScript -->
        <script src="/js/bootstrap.min.js"></script>

    </head>

    <body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">

            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12" align="center">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="../EventLab_logo_2-01.png" height="150px" width="125px">
                    </a>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" style="margin-top: 30px;" align="center">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span>Menu</span>
                        </button>

                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li {{ (Request::is('/') ? 'class=active' : '') }}><a href="{{ url('/') }}">Главная</a></li>
                                <li {{ (Request::is('about') ? 'class=active' : '') }}><a href="{{ url('/about') }}">О компании</a></li>
                                <li {{ (Request::is('news') ? 'class=active' : '') }}><a href="{{ url('/news') }}">События</a></li>
                                <li {{ (Request::is('clients') ? 'class=active' : '') }}><a href="{{ url('/clients') }}">Наши клиенты</a></li>
                                <li {{ (Request::is('socialProjects') ? 'class=active' : '') }}><a href="{{ url('/socialProjects') }}">Социальные проекты</a></li>
                                <li {{ (Request::is('contacts') ? 'class=active' : '') }}><a href="{{ url('/contacts') }}">Контакты</a></li>
                                <li {{ (Request::is('gallery') ? 'class=active' : '') }}><a href="{{ url('/gallery') }}">Галерея</a></li>
                                <li {{ (Request::is('locations') ? 'class=active' : '') }}><a href="{{ url('/locations') }}">Места</a></li>

                                <!-- Authentication Links -->
                                {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                                {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs" align="center" style="margin-top: 50px;">
                    <a href="{{ url('/contactForm') }}" class="customButton"/>Оставить заявку</a>
                </div>

                <div class="hidden-lg hidden-md hidden-sm col-xs-12" align="center" style="margin-top: 10px;">
                    <a href="{{ url('/contactForm') }}" class="customButton"/>Оставить заявку</a>
                </div>

            </div>


        </nav>

        {{--Content section--}}

        <div>
            @yield('indexContent')
        </div>

        <div class="container">

            @yield('content')

        </div><br><br><br><br>

    </div>

        <div class="navbar-fixed-bottom row-fluid" style="background: #ffffff">
            <div class="navbar-inner">
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <p class="text-muted">Контакты</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" align="right">
                                <a href="https://vk.com/" target="_blank"><img src="../iconz/vk_2.png" alt="VK"></a>
                                <a href="https://www.facebook.com/" target="_blank"><img src="../iconz/facebook.png" alt="Facebook"></a>
                                <a href="https://www.instagram.com/" target="_blank"><img src="../iconz/instagram.png" alt="Instagram"></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

    </body>
</html>

