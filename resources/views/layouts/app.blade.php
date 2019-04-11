<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <!-- Login Main Page-->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript">
        var host = "startbootstrap.com";
        if ((host == window.location.host) && (window.location.protocol != "https:"))
          window.location.protocol = "https";
    </script>
</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
