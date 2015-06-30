# databaseの接続

````
$ git fetch origin
$ git checkout origin/database
````

## databaseの設定

1. `.env`ファイルを作成する。
2. `config/database.php`を編集する。

### 対応するデータベース

- sqlite
- mysql
- postgress
- etc

## migration の使い方

[http://readouble.com/laravel/5/0/0/ja/migrations.html]()

### シーディング

`php artisan db:seed`で`database/seeds/DatabaseSeeder.php`が実行されます。

サンプルユーザやテストデータで大量にデータを投入する場合など、
プログラムが記述できるので大変便利です。

## DBクラスの使い方

[http://readouble.com/laravel/5/0/0/ja/queries.html]()

## Eloquentクラスの使い方

[http://readouble.com/laravel/5/0/0/ja/eloquent.html]()

## 演習

- Mysqlを起動して、Databaseに接続してみましょう。
- マイグレーションを定義して,新しいテーブルを作成したり削除したりしてみましょう。
- シーディング機能でコマンドからデータを投入してみましょう
- 付属のSQLITEを使用して、SQLITE接続に挑戦してみましょう。
- DBクラスを利用してデータベースに接続してみましょう。
- Eloquentを利用してデータベースに接続してみましょう。
