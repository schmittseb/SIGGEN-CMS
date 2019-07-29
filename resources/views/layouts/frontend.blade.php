<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/summernote-bs4.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style-colour.css') }}" rel="stylesheet">
    <style>td {
            vertical-align: middle !important;
        }</style>

    @yield('styles')

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
                SIGGEN
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    @include('partials.nav')
                </ul>


            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<footer class="footer">
    <div class="container">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="" class="nav-link">© 2019 Sebastian Schmitt</a>
            </li>
            @guest
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Admin area</a>
                </li>
            @else
                <li class="nav-item">
                    <a href="/admin/" class="nav-link">Admin area</a>
                </li>
            @endguest

        </ul>
    </div>
</footer>

@yield('scripts')
</body>
</html>
