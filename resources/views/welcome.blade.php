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
                    <a href="{{ url('/home') }}">{{__("Home")}}</a>
                @else
                    <a href="{{ route('login') }}">{{__("Login")}}</a>
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                CRM - CyberDuck
            </div>

            <div class="links">
                <a target="_blank" href="https://www.cyber-duck.co.uk/">{{__("Site")}}</a>
                <a target="_blank" href="https://www.cyber-duck.co.uk/client-stories">{{__("Client Stories")}}</a>
                <a target="_blank" href="https://www.cyber-duck.co.uk/how-we-work">{{__("How we work")}}</a>
                <a target="_blank" href="https://www.cyber-duck.co.uk/our-culture">{{__("Culture")}}</a>
                <a target="_blank" href="https://www.cyber-duck.co.uk/insights">{{__("Insights")}}</a>
                <a target="_blank" href="https://www.cyber-duck.co.uk/contact-us">{{__("Contact-us")}}</a>
            </div>
        </div>
    </div>
</body>
</html>
