@extends('layouts.app')
@section('content')
    <div id="landingContent" style="height: 100vh">
        <div class="flex-center flex-column">
            <img class="p-0" id="landing-logo" src="{{ secure_url('img/logo.jpg') }}" alt="">
            <p class="animated fadeIn mb-3 text-dark">Thank you for using our product. We're glad you're with us.</p>

            <p class="animated fadeIn lead">Rudge Software Team</p>
        </div>
    </div>
@endsection
