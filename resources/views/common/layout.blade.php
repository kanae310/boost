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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div id="app">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="nav-contents" href="/event"
               style="font-size:30pt;font-weight:bold; text-decoration:none;">Lian</a>
            @if (Route::has('login'))
                @auth
                    {{-- ここからログイン後--}}
                    <a class="nav-contents" href="/user">マイページ</a>
                    <a class="nav-contents" href="/category">カテゴリ一覧</a>
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
