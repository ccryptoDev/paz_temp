<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/js/owl/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/owl/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/content.css') }}">

    @yield('custom-style')
</head>

<body>

    <body>
        @include('layouts.header')
        <main class="main">
            @yield('content')
        </main>
        @include('layouts.footer')

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
        @yield('custom-script')
    </body>
</body>

</html>
