<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Event.loc') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <script type="text/javascript" src="js/confirm.js"></script>

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
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                        @else
                            <li><a href="{{ url('/eventsTypes') }}">Events types</a></li>
                            <li><a href="{{ url('/programs') }}">TeamBuilding</a></li>
                            <li><a href="{{ url('/newYearPrograms') }}">NY programs</a></li>
                            <li><a href="{{ url('/getSocialProjects') }}">SocialProjects</a></li>
                            <li><a href="{{ url('/getClients') }}">Clients</a></li>
                            <li><a href="{{ url('/galleries') }}">Gallary</a></li>
                            <li><a href="{{ url('/getLocations') }}">Locations</a></li>
                            <li><a href="{{ url('/getNews') }}">Events</a></li>
                            <li><a href="{{ url('/getReviews') }}">Reviews</a></li>
                            <li><a href="{{ url('/getServices') }}">Services</a></li>
                            <li><a href="{{ url('/getDecorations') }}">Decorations</a></li>
                            <li><a href="{{ url('/getMessages') }}">Messages</a></li>
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

        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    @if(Session::has('message'))
                        <b><h2 style="color:#006dcc">{{ Session::get('message') }}</h2><b>
                    @endif

                    @yield('content')

                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/common.js"></script>
    <script src="../js/confirm.js"></script>
    <script src="/additionalLibs/magnific-popup/jquery.magnific-popup.min.js"></script>
</body>
</html>
