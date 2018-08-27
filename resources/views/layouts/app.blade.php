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
                        <a class="navbar-brand" href="/"><img src="img/logo.jpg" alt="logo" width="auto" height="55" style="border-radius: 3px"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarColor03">
                            <ul class="navbar-nav mr-auto">
                                {{--<li class="nav-item @if(Request::is('/'))active @endif">
                                    <a class="nav-link" href="/">Home</a>
                                </li>--}}
                                <li class=" nav-item dropdown-ws  @if(Request::is('aboutus') || Request::is('projectteam'))active @endif">
                                    <a class="nav-link" href="/aboutus">About
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <div class="dropdown-content-ws">
                                        <a class="nav-link" href="/projectteam">Project team</a>
                                    </div>
                                </li>
                                <li class="nav-item @if(Request::is('stories'))active @endif">
                                    <a class="nav-link" href="/stories">Story List</a>
                                </li>
                                {{--to activate the portfolio page, please uncomment the below three lines.--}}
                                {{--<li class="nav-item @if(Request::is('portfolio'))active @endif">
                                    <a class="nav-link" href="/portfolio">Neighbours Project E-book</a>
                                </li>--}}
                                <li class="nav-item @if(Request::is('contactus')) active @endif">
                                    <a class="nav-link" href="/contactus">Contact Us</a>
                                </li>
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                                @if (Auth::user())
                                    <li class="dropdown">
                                        <a id="logout-menu" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }}
                                            <span class="caret"></span>
                                        </a>

                                        <ul id="logout-open-menu" class="dropdown-menu" role="menu">
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
                <p> Copyright @ 2018 Memorial University of Newfoundland.</p>
            </div>
            <div id="copy-right-location" class="col-md-6">
                <a href="https://www.google.com/maps/search/Newfoundland+and+Labrador+Canada">Newfoundland and Labrador, Canada.</a>
            </div>
        </div>
    </div>
    <div id="customized-modal" class="modal-w3">
        <div class="modal-content-w3" style="height: 200px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="modal-header-w3">
                        <span class="close-w3" onclick="closeModal()">&times;</span>
                        <h3>Neighbours: St. John's</h3>
                    </div>
                </div>
            </div>
            <div class="modal-body-w3" >
                <p style="font-size: 18px"> Welcome to Neighbours St. John’s, a digital archive of stories from cultural communities in and
                    around St. John’s, Newfoundland and Labrador. Discover the diversity and richness of our city
                    through stories from various cultural communities. You can find a story by clicking on the
                    interactive map, searching stories by keyword, or browsing stories by title.</p>
            </div>
        </div>
    </div>
<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/modal.js') }}"></script>
<script>
    $( document ).ready(function() {
        $("#logout-menu").on("click", function (event) {
            $("#logout-open-menu").show();
        });
        $(document).click( function(){
            $("#logout-open-menu").hide();
        });
    });
</script>
</body>
</html>
