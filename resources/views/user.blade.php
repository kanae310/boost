@extends('common.layout')

@section('index')
    <div>
        <p style="font-size:15pt;font-weight:bold;">マイページ</p>
        <p>名前　{{$user_data['user_name']}}</p>
        <p>メールアドレス　{{$user_data['email']}}</p>
        <p>生年月日　{{$user_data['birthday']}}</p>
        <p>大学名　{{$user_data['university_name']}}</p>
    </div>
    <div>
        <a href="/user/event/applied">申し込んだイベント一覧</a><br>
        <a href="/user/event/post-show">投稿したイベント一覧</a><br>
        <a href="/user/event/past-applied">過去に参加したイベント一覧</a>
    </div>
@endsection
