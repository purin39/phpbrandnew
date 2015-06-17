## 今どきのPHPアプリケーション開発

[http://chatbox-inc.com/school/course/php_brandnew/]

途中からの参加の方は、 以下の環境を用意した上でご参加ください。

3. XAMPP等のPHP実行環境

https://www.apachefriends.org/download.html

1. XAMPP等のPHP実行環境

https://www.apachefriends.org/download.html

2. Composer 実行環境

Windowsの方は、以下のリンクのComposer-Setup.exeよりダウンロードして実行してください。

https://getcomposer.org/doc/00-intro.md#installation-windows

Macの方はターミナルより以下のコマンドを叩いて実行します。

````
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
````

3. Unix コマンドが発行できる環境

Macの場合には ターミナル があるため不要です。

よくわからない…という場合には以下のmsysgitのインストールをおすすめしています。
https://msysgit.github.io/


## 環境構築に困ったら

git のツールや、以下のcloneコマンド等でソースを事前に取得し、
実際にLaravelの初期画面が表示されるところまで動作確認がとれていると安心です。

````
https://github.com/chatbox-school/phpbrandnew.git
````

- apache等のサーバで動かす場合は、apacheのフォルダに入れてダウンロードしたpublicフォルダにアクセス。
- コマンドが利用可能な場合、ダウンロードしたフォルダで`php artisan serve`のコマンドを発行し、ブラウザ`http://localhost:80000`を確認すればサイトが確認可能です。

環境構築に困った場合でも、事前にご連絡をいただければ講座開始３０分にサポートしますし、
講座内でも気軽に質問・相談可能です。不明点等あればお気軽にご連絡ください。



