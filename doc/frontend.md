# フロントエンドとPHP

````
$ git fetch origin
$ git checkout origin/frontend
````

## laravelを使ったAPI実装

app/Http/route.php

ルートの中で配列を返すだけでAPIになる。

パラメータは`Input::get()`で取得可能
(フォーム形式でもペイロード形式でも自動的に対応してくれる。)

## Twitter Bootstrap

[http://getbootstrap.com/]()

2.0のサイトに飛ばないように注意。

サイトは基本英語だけど、サンプルコードとサンプルデザインで十分に理解ができる。

javascriptプラグインなども

## AngularJS

Javascriptで動的な画面構成取るなら今はコレ。

controllerを作って、ng-controllerでDOMに貼り付ける形。

## その他同梱ライブラリ

### animate.css

https://daneden.github.io/animate.css/

CSSを書かずに、クラスだけでアニメーションが付与できる。

### Fontawesome

http://fortawesome.github.io/Font-Awesome/

アイコンフォントが手軽に作れる。

### UI bootstrap

http://angular-ui.github.io/bootstrap/

AngularJSとTwitterBootstrapの組み合わせで
アラート表示やモーダルが手軽にプログラムできる。

## 演習課題

− app/Service/QiitaにQiitaの投稿一覧を取得するモデルを用意しました。APIとして実装してみましょう。
- APIで値を受け取ってtitle/tagにPHPが含まれる記事だけを抽出するメソドを作ってみましょう。

- TwitterBootstrapのサンプルをベースに簡単なデザインを試してみましょう
- TwitterBootstrapのjQueryプラグインを使ってみましょう。
− AngularJSを利用して、APIやフォームのバインディングを試してみましょう
− animate.cssとjQueryを使って簡単なアニメーションを実装してみましょう
− fonowesomeを使って、アイコンフォントの使いやすさを体験してみましょう(CSSで色やフォントを変更してみましょう)
- UI bootstrapを使ってモーダルやアラートボックスのサンプルを試してみましょう