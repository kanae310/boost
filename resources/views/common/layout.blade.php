<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lian</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--cssのなかで一番下に置く-->
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="/event">
            <img class="logo"
                 src="{{ asset('img/logo3.png') }}"
                 height="16"
                 alt=""
                 loading="lazy"
                 style="margin-top: -1px;"
            />
        </a>

        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarButtonsExample"
            aria-controls="navbarButtonsExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <div class="d-flex align-items-center">
                @if (Route::has('login'))
                    @auth
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/user">MyPage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/event/category">Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/event/create">Create Event</a>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-primary  me-3">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                           this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </button>
                    @else
                        <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-primary  me-3">
                                <a href="{{ route('login') }}">Log in</a>
                            </button>
                            @if (Route::has('register'))
                                <button type="button" class="btn btn-secondary me-3">
                                    <a href="{{ route('register') }}">Register</a>
                                </button>
                            @endif
                        </div>
                    @endauth
                @endif
            </div>

        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<main>
    @yield('index')
</main>
</div>
<!-- MDB -->
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>
