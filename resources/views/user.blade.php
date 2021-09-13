@extends('common.layout')

@section('index')
    <div class="mx-auto" style="width: 200px;">
        <img src="{{$user_data['profile_img']}}" class="rounded-circle">
        <p>{{$user_data['user_name']}}</p>
        @if ($user_data['gender'])
            <p>性別　　　女</p>
        @else
            <p>性別　　　男</p>
        @endif
        <p>生年月日　{{$user_data['birthday']}}</p>
        <p>大学名　　{{$user_data['university_name']}}</p>
    </div>
    <div class="mx-auto" style="width: 200px;">
        <!-- <button class="primary">申し込んだイベント一覧</button>
        <button class="primary">申し込んだイベント一覧</button>
        <button class="primary">過去に参加したイベント一覧</button> -->
        <a href="/user/event/applied">申し込んだイベント一覧</a><br>
        <a href="/user/event/post-show">投稿したイベント一覧</a><br>
        <a href="/user/event/past-applied">過去に参加したイベント一覧</a>
    </div>
@endsection
