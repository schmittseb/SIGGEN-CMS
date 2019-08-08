<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin area</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,100i,400,400i,700,700i|IBM+Plex+Serif:400,400i&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/summernote-bs4.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('styles')

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <!--nav class="navbar navbar-expand-md shadow-sm"-->
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    SIGGEN
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is("admin/pages") ? 'active' : '' }}" href="{{ route('pages.index') }}">
                                    Overview existing pages
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is("admin/pages/create") ? 'active' : '' }}" href="{{ route('pages.create') }}">
                                    Create new page
                                </a>
                            </li>
                        @can('manageUsers', App\User::class)
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is("admin/users") ? 'active' : '' }}" href="{{ route('users.index') }}">
                                    Manage users
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is("register") ? 'active' : '' }}" href="{{ route('register') }}">
                                    Create new user
                                </a>
                            </li>
                        @endcan
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 frontend">
            @yield('content')
        </main>
    </div>
    <footer class="footer">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="https://www.linkedin.com/in/sebastian-schmitt-42a66a165/" class="nav-link">© 2019 Sebastian Schmitt</a>
                </li>

                    <li class="nav-item">
                        <a href="/" class="nav-link">Back to website</a>
                    </li>


            </ul>
        </div>
    </footer>


    @yield('scripts')
</body>
</html>
