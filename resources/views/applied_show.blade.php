@extends('common.layout')

@section('index')
    <div>
        <p style="width: 20rem; margin-left: 29px;">申し込んだイベント一覧</p>
        @foreach ($applied_show as $key => $event)
            <div class="card mx-auto" style="width: 20rem; margin-bottom: 20px;">
                <a href="/event/detail/{{$event['event_id']}}">
                    <img
                    src="{{$event['event_img']}}"
                    class="card-img-top"
                    alt="..."
                    />
                    <div class="card-body">
                        <p class="card-text" style="margin-bottom: 8px;">{{$event['event_name']}}</p>
                        <p class="card-text" style="margin-bottom: 8px;">主催者　　{{$host_user_name[$key]}}</p>
                        <p class="card-text" style="margin-bottom: 8px;">開始時間　{{$event['start_time']}}</p>
                        <p class="card-text" style="margin-bottom: 8px;">終了時間　{{$event['end_time']}}</p>
                        <p class="card-text" style="margin-bottom: 8px;">募集期限　{{$event['application_period']}}</p>
                        <p class="card-text" style="margin-bottom: 8px;">開催場所　{{$event['location']}}</p>
                        <p class="card-text" style="margin-bottom: 8px;">カテゴリ　{{$event['category_name']}}</p>
                    </div>
                </a>
            </div>
        @endforeach
        <a class="btn btn-secondary btn-rounded" href="/user" style="margin: 0 0 0 29px;">もどる</a>
    </div>
@endsection
