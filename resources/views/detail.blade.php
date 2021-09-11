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
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="nav-contents" href="/" style="font-size:30pt;font-weight:bold; text-decoration:none;">Lian</a>
            <a class="nav-contents" href="/login">ログイン</a>
        </div>
    </nav>
    <main class="py-4">
      <div>
        <p style="font-size:15pt;font-weight:bold;">{{$event_detail['event_name']}}</p>
        <p>開始日時　{{$event_detail['start_time']}}</p>
        <p>終了日時　{{$event_detail['end_time']}}</p>
        <p>開催場所　{{$event_detail['location']}}</p>
        <p>募集期間　{{$event_detail['application_period']}}</p>
        <p>イベント説明　{{$event_detail['explain']}}</p>
        <p>Discord URL　{{$event_detail['discord_url']}}</p>
      </div>
      <form action="" method="">
        <div>
          <input type="hidden" value={{$event_detail['event_id']}}>
          <button type="submit" class="submit-button">このイベントに申し込む</button>
          <!-- <input type="submit" class="submit-button" value="このイベントに申し込む"> -->
        </div>
      </form>
    </main>
</body>
</html>
