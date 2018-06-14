<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The Neighbours') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div id="main" class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="/"><img src="img/logo.jpg" alt="logo" width="auto" height="55"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarColor03">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item @if(Request::is('/'))active @endif">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item @if(Request::is('stories'))active @endif">
                                    <a class="nav-link" href="/stories">Stories</a>
                                </li>
                                <li class="nav-item @if(Request::is('contactus')) active @endif">
                                    <a class="nav-link" href="/contactus">Contact Us</a>
                                </li>
                                <li class="nav-item dropdown @if(Request::is('aboutus'))active @endif">
                                    <a id="aboutus-menu" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                                    <div id="aboutus-open-menu" class="dropdown-menu" x-placement="bottom-start">
                                        <a class="nav-link" href="/aboutus">About</a>
                                        <a class="nav-link" href="#">Another action</a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                                @if (Auth::user())
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }}
                                            <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
    <div class="footer">
        <div class="row">
            <div id="copy-right" class="col-md-6">
                <p> Copyright @ 2018 yasaman.bahrami@gmail.com.</p>
            </div>
            <div id="copy-right-location" class="col-md-6">
                <a href="https://www.google.com/maps/search/Newfoundland+and+Labrador+Canada">Newfoundland and Labrador, Canada.</a>
            </div>
        </div>
    </div>
<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/modal.js') }}"></script>
</body>
</html>
