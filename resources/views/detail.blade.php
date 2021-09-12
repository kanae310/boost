@extends('common.layout')

@section('index')

<div>
    <p style="font-size:15pt;font-weight:bold;">{{$event_detail['event_name']}}</p>
    <p>開始日時　{{$event_detail['start_time']}}</p>
    <p>終了日時　{{$event_detail['end_time']}}</p>
    <p>開催場所　{{$event_detail['location']}}</p>
    <p>募集期間　{{$event_detail['application_period']}}</p>
    <p>イベント説明　{{$event_detail['description']}}</p>
    <p>Discord URL　<a href="{{$event_detail['discord_url']}}">{{$event_detail['discord_url']}}</a></p>
</div>
<div>
    <a href="/event/apply/{{$event_detail['event_id']}}">このイベントに申し込む</a>
</div>
@endsection
