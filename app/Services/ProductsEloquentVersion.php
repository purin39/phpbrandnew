<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/06/28
 * Time: 17:34
 */

namespace App\Services;
use App\Eloquent\ProductEloquent;


class ProductsEloquentVersion {


    static public function getList(){
        return ProductEloquent::all();
    }

    static public function insert($data){
        $data = new ProductEloquent($data);
        $data->save();
    }

    static public function delete($id){
        $data = ProductEloquent::where("id",$id)->first();
        $data->delete();
    }

}