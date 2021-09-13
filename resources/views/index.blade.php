@extends('common.layout')

@section('index')
    <div class="top">
        <div class="main-visual">
            <div class="item">
                <img class="image" src="{{ asset('img/logo.png') }}" alt="">
                <h4>Isn't it connected to a new encounter?</h4>
                <p>たくさんの出会い、繋がりがあるコミュニティ</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Survise</h5>
                <p class="card-text">
                    同じ目的に向かって一緒に頑張る仲間がほしい！いろんな人と出会い視野を広げたい！
                    そんな時にイベントを企画して新しい仲間を見つけませんか？
                    また、面白そうなイベントに参加して、学生生活をもっと充実させよう。
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">大学生限定</h5>
                <p class="card-text">
                    大学生限定のコミュニティなので、同年代の普段出会う事のない新しい出会いがあります
                    同じ大学同士での仲間も見つかる！
                </p>
            </div>
        </div>
    </div>
@endsection
