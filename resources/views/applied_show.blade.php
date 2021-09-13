@extends('common.layout')

@section('index')
    <div>
        @foreach ($applied_show as $event)
            <div class="card mx-auto" style="width: 20rem; margin-bottom: 20px;">
                <a href="/event/detail/{{$event['event_id']}}">
                    <img
                    src="{{$event['event_img']}}"
                    class="card-img-top"
                    alt="..."
                    />
                    <div class="card-body">
                        <p class="card-text" style="margin-bottom: 8px;">{{$event['event_name']}}</p>
                        <p class="card-text" style="margin-bottom: 8px;">主催者　　{{$event['user_name']}}</p>
                        <p class="card-text" style="margin-bottom: 8px;">開始時間　{{$event['start_time']}}</p>
                        <p class="card-text" style="margin-bottom: 8px;">終了時間　{{$event['end_time']}}</p>
                        <p class="card-text" style="margin-bottom: 8px;">募集期限　{{$event['application_period']}}</p>
                        <p class="card-text" style="margin-bottom: 8px;">開催場所　{{$event['location']}}</p>
                        <p class="card-text" style="margin-bottom: 8px;">開催場所　{{$event['category_name']}}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
