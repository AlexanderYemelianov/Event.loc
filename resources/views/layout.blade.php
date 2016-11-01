<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Event.loc') }}</title>

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
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    {{--<a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Event.loc') }}
                    </a>--}}
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li {{ (Request::is('/') ? 'class=active' : '') }}><a href="{{ url('/') }}">Главная</a></li>
                        <li {{ (Request::is('about') ? 'class=active' : '') }}><a href="{{ url('/about') }}">О компании</a></li>
                        <li {{ (Request::is('events') ? 'class=active' : '') }}><a href="{{ url('/events') }}">События</a></li>
                        <li {{ (Request::is('clients') ? 'class=active' : '') }}><a href="{{ url('/clients') }}">Наши клиенты</a></li>
                        <li {{ (Request::is('socialprojects') ? 'class=active' : '') }}><a href="{{ url('/socialprojects') }}">Социальные проекты</a></li>
                        <li {{ (Request::is('gallery') ? 'class=active' : '') }}><a href="{{ url('/gallery') }}">Галерея</a></li>
                        <li {{ (Request::is('locations') ? 'class=active' : '') }}><a href="{{ url('/locations') }}">Места</a></li>
                        <li {{ (Request::is('contacts') ? 'class=active' : '') }}><a href="{{ url('/contacts') }}">Контакты</a></li>
                            <!-- Authentication Links -->
                        {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                    </ul>
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

        {{--!!!!!!!!!!!!!!!!!!!!Styles of footer should not be there!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!--}}
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

