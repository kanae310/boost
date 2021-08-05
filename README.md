# Boost


## Local環境構築

### 事前準備

 - docker for mac インストール済みであること
 - 当プロジェクトをcloneすること

### 実行方法

以下の3つの方法のいづれかを使ってください。

バックグラウンドで動かしたいとき

```shell
make up
```

バックグラウンドで動かさないとき

```shell
make upf
```

image pullをやり直すとき

```shell
make build
```

### 動作確認

 - http://localhost/index
     - 初期ページが表示されること
 - http://localhost/getKey
     - redisのデータが表示されていること
 - http://localhost:8001
     - redisinsightでデータがredisのデータが確認できること
 - http://localhost/users
     - userTBLのデータが参照できること
