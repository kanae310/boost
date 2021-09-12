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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    　　<!--cssのなかで一番下に置く-->
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            @if (Route::has('login'))
                @auth
                    {{-- ここからログイン後--}}
                    <a class="nav-contents" href="/event"
                       style="font-size:30pt;font-weight:bold; text-decoration:none;">
                        <img src="{{ asset('img/testlogo.png') }}" alt="">
                    </a>
                    <a class="nav-contents" href="/user">マイページ</a>
                    <a class="nav-contents" href="/event/category">カテゴリ一覧</a>
                    <a class="nav-contents" href="/event/create">イベント作成</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                    {{-- ここまで--}}
                @else
                    {{--ここからログイン前--}}
                    <a class="nav-contents" href="/"
                       style="font-size:30pt;font-weight:bold; text-decoration:none;">Lian</a>
                    <a class="nav-contents" href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log
                        in</a>

                    @if (Route::has('register'))
                        <a class="nav-contents" href="{{ route('register') }}"
                           class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                    {{--ここまで--}}
                @endauth
            @endif
        </div>
    </nav>

    <main class="py-4">
        @yield('index')
    </main>
</div>
</body>
</html>
