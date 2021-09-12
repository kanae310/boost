@extends('common.layout')

@section('index')

<div>
    <p style="font-size:15pt;font-weight:bold;">カテゴリ</p>
    @foreach ($category_show as $category)
        <div>
            <a href="/event/{{$category['category_id']}}">{{$category['category_name']}}</a>
        </div>
    @endforeach
</div>
@endsection
