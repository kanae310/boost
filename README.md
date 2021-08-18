# Boost

# 概要

boost用のテンプレートリポジトリです。

# アーキテクチャー

 - nginx
 - php-fpm7(Laravel)
 - mysql5.7
 - redis
 - node16.6.1

# Local環境構築

## 事前準備

 - dockerがインストール済みであること
 - 当プロジェクトをcloneすること

## ローカル環境立ち上げるコマンド

```shell
make up  # 該当プロジェクトをupする
make upd  # バックグラウンドで動かすとき
make build  # buildをやり直すとき
make upFrontAndBack # frontendでnodeを使う場合(nextjs)
make updFrontAndBack # バックグラウンドで動かすとき
make buildFrontAndBack # buildをやり直すとき
```

#### 動作確認

- http://localhost
- http://localhost/user
- http://localhost/api
- http://localhost/api/user
- http://localhost:3000
   - nodeを使う場合


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
