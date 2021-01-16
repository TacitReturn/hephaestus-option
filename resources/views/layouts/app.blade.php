<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@100;400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ secure_asset('css/mdb.min.css') }}">
    <!-- Admin styles -->
    <link rel="stylesheet" href="{{ secure_asset('css/mdb.admin.min.css') }}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
</head>

<body class="skin-light">
<div id="app">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar">
        <div class="container">
            <a id="navbarBrand" class="navbar-brand"
               href="/"><strong>{{ config('app.name', 'Hephaestus Option') }}</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                    aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact-us') }}">Contact</a>
                    </li>
                </ul>
                <div>
                    <ul class="navbar-nav mr-auto">
                        @guest
                            @if(Route::has('login'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('login') }}">Login<span
                                            class="sr-only">(current)</span></a>
                                </li>
                            @endif
                            @if(Route::has('register'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('register') }}">Register<span class="sr-only">(current)</span></a>
                                </li>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>
<!-- End your project here-->

<!-- jQuery -->
<script type="text/javascript" src="{{ secure_asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ secure_asset('js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ secure_asset('js/mdb.min.js') }}"></script>
<!-- MDB Admin -->
<script type="text/javascript" src="{{ secure_asset('js/mdb.admin.min.js') }}"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>
</body>
</html>
