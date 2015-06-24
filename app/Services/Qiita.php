<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/06/18
 * Time: 0:18
 */

namespace App\Services;


/**
 * Class Address
 *
 * サンプルのモデル
 * 引数を渡して住所の候補地を取得してくれる。
 *
 * 名前空間を使用
 * @package App\Services
 */
class Qiita {

    static public function get(){

        $url = "https://qiita.com/api/v2/items?per_page=100";
        $content = file_get_contents($url);
        $content = json_decode($content,true);

        $hoge = array_map(function($val){
            return [
                "title" => array_get($val,"title"),
                "url" => array_get($val,"url"),
                "tags" => array_get($val,"tags",[]),
            ];
        },$content);
        return $hoge;

    }


}