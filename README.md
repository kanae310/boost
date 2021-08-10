# Boost

# 概要

TODO:

# Local環境構築

## 事前準備

 - docker for mac インストール済みであること
 - 当プロジェクトをcloneすること

### phpのみの場合

1. 該当プロジェクトをupする

```shell
make up
```

 - バックグラウンドで動かすとき

```shell
make upd
```

- buildをやり直すとき

```shell
make build
```

#### 動作確認

- http://localhost
- http://localhost/user
- http://localhost/api
- http://localhost/api/user

### frontendでnodeを使う場合(nextjs)

1. 該当プロジェクトをupする

```shell
make upFrontAndBack
```

- バックグラウンドで動かさないとき

```shell
make updFrontAndBack
```

- buildをやり直すとき

```shell
make buildFrontAndBack
```

#### 動作確認

##### laravel

 - http://localhost
 - http://localhost/user
 - http://localhost/api
 - http://localhost/api/user

##### node

```
http://localhost:3000
```


## tool紹介

### adminer

http://localhost:9090

DB接続ツールです
接続する際はサーバー:mysql、その他の情報はdocker-compose-mysql.ymlを参照してください。

https://www.adminer.org/

### redisinsight

http://localhost:8001

redisのGUIツールです。
接続する際はHost:redis、Poer:6379、Name:任意で接続してください

https://redislabs.com/redis-enterprise/redis-insight/
