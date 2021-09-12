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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div id="app">
{{--        <nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--            <div class="container-fluid">--}}
{{--                <a class="navbar-brand" href="/">Lian</a>--}}
{{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}
{{--                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">--}}
{{--                    <ul class="nav navbar-nav">--}}
{{--                        <li class="nav-item @if(Request::routeIs('search')) active @endif">--}}
{{--                            <a class="nav-link" aria-current="search" href="/">検索</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item  @if(Request::routeIs('like')) active @endif">--}}
{{--                            <a class="nav-link" href="/like">いいね一覧</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item  @if(Request::routeIs('about')) active @endif">--}}
{{--                            <a class="nav-link" href="/about">Lianとは？</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item  @if(Request::routeIs('account')) active @endif">--}}
{{--                            <a class="nav-link" href="/account">アカウント</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="nav-contents" href="/event" style="font-size:30pt;font-weight:bold; text-decoration:none;">Lian</a>
                <a class="nav-contents" href="/category">カテゴリ一覧</a>
                <a class="nav-contents" href="/login">ログイン</a>
                <a class="nav-contents" href="/event/create">イベント作成</a>
            </div>
        </nav>
        <main class="py-4">
            @yield('index')
        </main>
    </div>
</body>
</html>
