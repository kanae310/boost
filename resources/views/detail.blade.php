@extends('common.layout')

@section('index')
<!-- イベントを作成して、詳細画面にリダイレクトした時に表示するアラート -->
    @if(isset($_GET['link']))
        @if ($_GET['link'] == 'eventStore')
            <div class="alert alert-info" role="alert" data-mdb-color="primary">
                イベント作成を完了しました
            </div>
        @endif
    @endif
<!-- end -->
<!-- イベントに申し込みをして、詳細画面にリダイレクトした時に表示するアラート -->
    @if(isset($_GET['link']))
        @if ($_GET['link'] == 'eventApply')
            <div class="alert alert-info" role="alert" data-mdb-color="primary">
                イベントへの申し込みを完了しました
            </div>
        @endif
    @endif
<!-- end -->
<!-- イベントの申し込みをキャンセルして、詳細画面にリダイレクトした時に表示するアラート -->
    @if(isset($_GET['link']))
        @if ($_GET['link'] == 'eventCancel')
            <div class="alert alert-danger" role="alert" data-mdb-color="primary">
                イベントの申し込みをキャンセルしました
            </div>
        @endif
    @endif
<!-- end -->
<div class="detail-content">
    <div>
        <img src="{{$event_detail['event_img']}}">
        <p style="font-size:15pt;font-weight:bold;">{{$event_detail['event_name']}}</p>
        <p>開始日時　{{$event_detail['start_time']}}</p>
        <p>終了日時　{{$event_detail['end_time']}}</p>
        <p>開催場所　{{$event_detail['location']}}</p>
        <p>募集期限　{{$event_detail['application_period']}}</p>
        <p>イベント説明　{{$event_detail['description']}}</p>
        @if($applied_flag!==0)
            <p>Discord URL　<a href="{{$event_detail['discord_url']}}">{{$event_detail['discord_url']}}</a></p>
        @endif
    </div>
    <div>
        @if($applied_flag===0)
            <a class="btn btn-primary btn-rounded" href="/event/detail/{{$event_detail['event_id']}}/apply">このイベントに申し込む</a>
        @elseif($applied_flag===1)
            <p class="alert alert-danger" role="alert">すでに申し込みしています</p>
            <a class="btn btn-outline-primary btn-rounded" href="/event/detail/{{$event_detail['event_id']}}/cancel">このイベントをキャンセルする</a>
        @elseif($applied_flag===2)
            <p class="alert alert-info" role="alert">あなたはこのイベントの主催者です</p>
            <a class="btn btn-outline-primary btn-rounded" href="/event/detail/{{$event_detail['event_id']}}/delete">このイベント削除する</a>
        @endif
    </div>
@endsection

