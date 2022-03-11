<!doctype html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset("assets/css/auth-style.css")}}" rel="stylesheet">
</head>
<body>
    <section class="container-auth">
        <div class="form">
            <div class="logo">
                <h1>
                  <a href="http://127.0.0.1:8000" class="d-flex justify-content-center align-items-center">
                    <img src="http://127.0.0.1:8000/assets/img/favicon.png" alt=""> &nbsp;
                    <span>Orientation</span>
                  </a>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
            </div>
             @yield('content')
        </div>
        <div class="banniere"></div>
    </section>
</body>
</html>
