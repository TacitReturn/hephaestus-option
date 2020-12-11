<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
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

<!-- Start your project here-->
<div style="height: 100vh">
    <div class="flex-center flex-column">
        <img id="landing-logo" src="{{ secure_url('img/logo.jpg') }}" alt="">
        <h1 class="text-hide animated fadeIn mb-4" style="width: 250px; height: 90px;">Hephaestus Option</h1>
{{--        <a href="{{ secure_asset('img/logo.jpg') }}">Click Me</a>--}}
        <h5 class="animated fadeIn mb-3">Thank you for using our product. We're glad you're with us.</h5>

        <p class="animated fadeIn text-muted">Rudge Software Team</p>
    </div>
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
