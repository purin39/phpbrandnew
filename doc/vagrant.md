## vagrantによるlaravel環境構築

6/16日 講座開催の内容を受けて一部内容を修正しました。

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

## Vagrantの準備

Vagrantの初期化とBoxファイルの追加のために下の２つのコマンドを発行します。

````
vagrant init
vagrant box add laravel/homestead
````

ssh接続の鍵がない場合には作成します。

````
ssh-keygen -t rsa
````

~/.ssh にディレクトリが作成され、中に鍵ファイルが生成されます。

これら操作はVagrantファイルを追加した時にのみ必要です。

## Homesteadのインストール

Homestead 環境をダウンロードします。

````
git clone https://github.com/laravel/homestead.git Homestead
````

作成されたHomesteadディレクトリに移動し、init.shを実行します。

````
cd Homestead
bash init.sh
````

`~/.homestead`ディレクトリが作成されるので、Homestead.ymlを編集します。

````
# ここをローカルのフォルダに置き換える
folders:
    - map: ~/Code/phpbrandnew
      to: /home/vagrant/Code

sites:
    - map: homestead.app
      to: /home/vagrant/Code/public
````

Vagrant upしてVagrantを起動します。

````
cd ~/phpbrandnew
vagrant up
````

Vagrant が立ち上がったら仮想マシンの中にsshで接続し、composerコマンドを叩きます。

````
vagrant ssh

# 接続後

cd Code
composer install
````

ブラウザでhttp://192.168.10.10にアクセスし laravelの表示が出たら完了です。

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
