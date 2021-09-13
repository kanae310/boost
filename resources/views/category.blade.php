@extends('common.layout')

@section('index')

<div class="detail-content">
    <p style="font-size:15pt;font-weight:bold;">カテゴリ</p>
    @foreach ($category_show as $category)
        <div style="margin-bottom: 5px">
            <a class="btn btn-outline-info btn-rounded btn-sm" href="/event/category/{{$category['category_id']}}">{{$category['category_name']}}</a>
        </div>
    @endforeach
</div>
@endsection
