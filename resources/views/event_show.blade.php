@extends('common.layout')

@section('index')

<div>
  @foreach ($event_show as $event)
      <div>
          <a href="/event/detail/{{$event['event_id']}}">{{$event['event_name']}}</a>
          <p>募集期間　{{$event['application_period']}}</p>
          <p>開催場所　{{$event['location']}}</p>
      </div>
  @endforeach
</div>
@endsection

