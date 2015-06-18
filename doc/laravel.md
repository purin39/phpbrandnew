# laravelの使い方

````
$ git fetch origin
$ git checkout origin/laravel
````

## laravelの基本機能

## 基本的なファイル構成

- app クラスファイルを格納します。
- bootstrap アプリケーションの起動処理などを記述します。
- config アプリケーションの設定ファイルを格納します。
- database データベースの設定ファイルを配置します。
- public サーバで公開するフォルダです。
- resource Viewファイルなどを格納します。
- storage ログやセッションなど書き込まれるファイルを格納します。
- test ユニットテストなどを格納します。

## Controller

- route は app/Http/routes.php にて記述する。
- クロージャを使用したルートの書き方。
- コントローラをクラスで綺麗にすっきり記述する。

## Model

- 名前空間・オートローダを使って自由に配置できる。

composer.jsonの編集後は以下のコマンドが必要

````
$ composer dump-autoload
````

## View

- view関数の使い方
- phpテンプレート
- blade テンプレートファイル

## 演習

- シンプルなルートを記述して、文字列をブラウザに表示してみよう。
- 独自のクラス/名前空間定義でオートロードを体験してみよう
- 様々なViewファイルの書き方、値の割り当てを試してみよう。
- 独自のコマンドファイルを作成してみよう。