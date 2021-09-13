@extends('common.layout')

@section('index')
    <div class="top">
        <div class="top-visual">
            <div class="top-item">
                <img class="top-image" src="{{ asset('img/logo.png') }}" alt="">
                <h4 class="top-comment">Isn't it connected to a new encounter?</h4>
                <p class="top-comment">たくさんの出会い、繋がりがあるコミュニティ</p>
            </div>
        </div>
        <div class="card top-card">
            <div class="card-body top-card-body">
                <h5 class="card-title top-card-title">Service</h5>
                <p class="card-text top-card-text">
                    同じ目的に向かって一緒に頑張る仲間がほしい！いろんな人と出会い視野を広げたい！
                    そんな時にイベントを企画して新しい仲間を見つけませんか？
                    また、面白そうなイベントに参加して、学生生活をもっと充実させよう。
                </p>
            </div>
        </div>
        <div class="card top-card" >
            <div class="card-body top-card-body">
                <h5 class="card-title top-card-title">大学生限定!</h5>
                <p class="card-text top-card-text">
                    大学生限定のコミュニティなので、同年代の普段出会う事のない新しい出会いがあります
                    同じ大学同士での仲間も見つかる！
                </p>
            </div>
        </div>
    </div>
@endsection
