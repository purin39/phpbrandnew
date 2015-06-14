## vagrantによるlaravel環境構築

# homestead 環境について

- Ubuntu 14.04
- PHP 5.6
- HHVM
- Nginx
- MySQL
- Postgres
- Node (With PM2, Bower, Grunt, and Gulp)
- Redis
- Memcached
- Beanstalkd
- Laravel Envoy
- Blackfire Profiler

公式ガイド : http://laravel.com/docs/5.1/homestead　
日本語ガイド : http://readouble.com/laravel/5/0/0/ja/homestead.html

## 導入方法

1. .homestead/Homestead.yaml.sample をコピーしてHomestead.yamlを作成
2. 必要箇所を編集: 同期フォルダパス等
3. vagrant up コマンドを叩く
4. 設定したIPアドレス [192.168.10.10] を叩いてみる。

### 鍵の作成が必要な場合

````
ssh-keygen -t rsa
````

## 使い方

````
# 起動する
$ vagrant up

# 中に入る
$ vagrant ssh
 
# 落とす
$ vagrant halt
````

## 演習

- Homestead.yamlを変更してみましょう。
- 実際にアプリケーションが動くことを確認してみましょう。
- ファイル同期を確認してみましょう。
- MySQL ワークベンチなどのツールでvagrantの中に入ってみましょう(homestead / secret)。
