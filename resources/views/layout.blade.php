<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Event.loc') }}</title>

        <!-- Part for slideshow staff -->
        @yield('head')

        <link href="/css/app.css" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/') }}">Главная</a></li>
                            <li><a href="{{ url('/about') }}">О компании</a></li>
                            <li><a href="{{ url('/servicies') }}">Что мы делаем</a></li>
                            <li><a href="{{ url('/clients') }}">Наши клиенты</a></li>
                            <li><a href="{{ url('/socialprojects') }}">Социальные проекты</a></li>
                            <li><a href="{{ url('/values') }}">Ценности</a></li>
                            <li><a href="{{ url('/gallery') }}">Галерея</a></li>
                            <li><a href="{{ url('/contacts') }}">Контакты</a></li>
                            {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        {{--Content section--}}

        <div class="container">

            @yield('content')

        </div><br><br><br><br>

    </div>

        {{--!!!!!!!!!!!!!!!!!!!!Styles of footer should not be there!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!--}}
        <div class="navbar-fixed-bottom row-fluid">
            <div class="navbar-inner">
                <footer style="width: 100%; height: 60px; background-color: #f5f5f5;">
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

