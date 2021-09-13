@extends('common.layout')

@section('index')
<div class="detail-content">
    <div>
        <form action="/event/store" method="post">
            @csrf
            <div>
                <label for="event_name">イベント名</label><br>
                <input class="form-control" type="text" name="event_name" id="event_name" required><br>
            </div>
            <div>
                <label for="description">イベントの説明</label><br>
                <input class="form-control" type="text" name="description" id="description" required><br>
            </div>
            <div>
                <label for="application_period">募集期限</label><br>
                <input class="form-control" type="date" name="application_period" id="application_period" required><br>
            </div>
            <div>
            <label for="start_time">開始時間</label><br>
                <input class="form-control" type="datetime-local" name="start_time" id="start_time" required><br>
            </div>
            <div>
            <label for="end_time">終了時間</label><br>
                <input class="form-control" type="datetime-local" name="end_time" id="end_time" required><br>
            </div>
            <div>
                <label for="location">開催場所</label><br>
                <input class="form-control" type="text" name="location" id="location" required><br>
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
                </select><br>
            </div>
            <div>
                <label for="event_img">イベント画像</label><br>
                <input class="form-control" type="url" name="event_img"　value="event_img" placeholder="画像のurlを入力">
            </div><br>
            <div>
                <label for="discord_url">DiscordのURL</label><br>
                <span class="input-group-text" id="basic-addon3">https://discord.gg/</span>
                <input type="text" class="form-control" name="discord_url" id="discord_url" required>
                <p>※参加者との交流はDiscordで行うため、Discordのサーバーを作成し、URLを書いてください。</p>
            </div>
            <input class="btn btn-primary btn-rounded" type="submit" value="イベントを作成する">
        </form>
    </div>
</div>
@endsection
