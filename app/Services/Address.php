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
class Address {

    static public function get($address){

        $url = "http://maps.googleapis.com/maps/api/geocode/json?".http_build_query([
                "address" => $address,
                "sensor" => false
            ]);
        $content = file_get_contents($url);
        $content = json_decode($content,true);

        $hoge = array_map(function($val){
            return array_get($val,"formatted_address");
        },array_get($content,"results"));
        return $hoge;

    }


}