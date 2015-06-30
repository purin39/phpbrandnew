<?php

use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// ここにルートを記述していく。クロージャで記述できる。

Route::get("/sample_route",function(){
    //文字列を返すとその文字が出力される。
    return "hello world";
});

//Inputクラスでパラメータを取得できる。
Route::get("/sample_route2",function(){
    $name = Input::get("name","John");
    return "hello world, $name";
});

//モデルの呼び出しはオートローダで。
Route::get("/sample",function(){
    return \App\Services\Address::get("大");
});


## angular Sample
// モデルを使ってAPIを実装してみる。
Route::post("/api/sample",function(){
    $address = Input::get("address");
    return \App\Services\Address::get($address);
});

## database Sample
// モデルを使ってAPIを実装してみる。
Route::get("/product/list",ProductController::class."@index");
Route::post("/product/insert",ProductController::class."@insert");
Route::post("/product/delete",ProductController::class."@delete");

