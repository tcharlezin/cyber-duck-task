<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRM - CyberDuck</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <style>

    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                CRM - CyberDuck
            </div>

            <div class="links">
                <a target="_blank" href="https://www.cyber-duck.co.uk/">Site</a>
                <a target="_blank" href="https://www.cyber-duck.co.uk/client-stories">Client Stories</a>
                <a target="_blank" href="https://www.cyber-duck.co.uk/how-we-work">How we work</a>
                <a target="_blank" href="https://www.cyber-duck.co.uk/our-culture">Culture</a>
                <a target="_blank" href="https://www.cyber-duck.co.uk/insights">Insights</a>
                <a target="_blank" href="https://www.cyber-duck.co.uk/contact-us">Contact-us</a>
            </div>
        </div>
    </div>
</body>
</html>
