@extends('common.layout')

@section('index')

    <p>応募完了しました！</p>
    {{--{{var_dump($res_data);}}--}}
    <p>Discord URL　<a href="{{$res_data['discord_url']}}">{{$res_data['discord_url']}}</a></p>
    <a href="/event/detail/{{$res_data['event_id']}}">詳細ページに戻る</a>

@endsection
