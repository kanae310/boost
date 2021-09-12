@extends('common.layout')

@section('index')

<div>
    <form action="/event/store" method="post">
        @csrf
        <div>
            <label for="event_name">イベント名</label>
            <input type="text" name="event_name" id="event_name" required>
        </div>
        <div>
            <label for="description">イベントの説明</label>
            <input type="text" name="description" id="description" required>
        </div>
        <div>
            <label for="application_period">募集期限</label>
            <input type="date" name="application_period" id="application_period" required>
        </div>
        <div>
        <label for="start_time">開始時間</label>
            <input type="datetime-local" name="start_time" id="start_time" required>
        </div>
        <label for="end_time">終了時間</label>
            <input type="datetime-local" name="end_time" id="end_time" required>
        </div>
        <div>
            <label for="location">開催場所</label>
            <input type="text" name="location" id="location" required>
        </div>
        <div>
            <label for="category_id">カテゴリー</label>
            <select class="form-select" name="category_id">
                <option selected></option>
                <option value="1">ゲーム</option>
                <option value="2">エクササイズ</option>
                <option value="3">スポーツ</option>
                <option value="4">勉強</option>
                <option value="5">その他</option>
            </select>
        </div>
        <div>
            <label for="university_lock">あなたの大学限定にしますか</label>
            <div>
                <input id="university_lock_yes" type="radio" name="university_lock" value="1">
                <label for="university_lock_yes">はい</label>
                <input id="university_lock_no" type="radio" name="university_lock" value="0">
                <label for="university_lock_no">いいえ</label>
            </div>
        <div>
            <label for="discord_url">DiscordのURL</label>
            <input type="text" name="discord_url" id="discord_url" required>
            <p>※参加者との交流はDiscordで行うため、Discordのサーバーを作成し、URLを書いてください。</p>
        </div>
        <input type="submit" value="イベント作成">
    </form>
</div>
</div>
@endsection
