<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/06/28
 * Time: 17:34
 */

namespace App\Services;
use App\Eloquent\ProductEloquent;
use \DB;


class Products {


    static public function getList(){
        return DB::table("products")->select()->get();
    }

    static public function insert($data){
        DB::table("products")->insert($data);
    }

    static public function delete($id){
        DB::table("products")->where("id",$id)->delete();
    }

}