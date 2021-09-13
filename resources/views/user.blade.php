@extends('common.layout')

@section('index')
    <div class="detail-content" style="width: 300px;">
        <div class="center-block">
            <img  src="{{$user_data['profile_img']}}" class="rounded-circle mx-auto">
        </div>
        <div class="pull-left">
            <p style="font-size:15pt;font-weight:bold;margin-top:10px">{{$user_data['user_name']}}</p>
            @if ($user_data['gender'])
            <p>性別　　　女</p>
            @else
            <p>性別　　　男</p>
            @endif
            <p>生年月日　{{$user_data['birthday']}}</p>
            <p>大学名　　{{$user_data['university_name']}}</p>
        </div>
        <div class="pull-left" style="width: 300px;">
            <!-- <button class="primary">申し込んだイベント一覧</button>
            <button class="primary">申し込んだイベント一覧</button>
            <button class="primary">過去に参加したイベント一覧</button> -->
            <a class="btn btn-secondary btn-rounded" href="/user/event/applied" style="margin-bottom:5px">申し込んだイベント一覧</a><br>
            <a class="btn btn-secondary btn-rounded" href="/user/event/post-show" style="margin-bottom:5px">投稿したイベント一覧</a><br>
            <a class="btn btn-secondary btn-rounded" href="/user/event/past-applied" style="margin-bottom:5px">過去に参加したイベント一覧</a>
        </div>
    </div>
@endsection
