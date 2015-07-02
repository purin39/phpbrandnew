<?php
namespace MyShop\Model\Repository;
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/06/25
 * Time: 12:55;
 */
use MyShop\Model\Entity\ProductEntity;
use Carbon\Carbon;


class ProductRepository{

    /**
     * 商品の一覧を取得する。
     *
     * @return Entity
     */
    static public function getList(){
        $result = \DB::table("products")->get();

        $return = [];
        foreach($result as $row){
            $return[] = new ProductEntity([
                "name" => $row->name,
                "price" => $row->price,
                "amount" => $row->amount,
            ]);
        }

        return $result;
    }

    static public function insert(ProductEntity $productEntity){
        \DB::table("products")->insert([
            "name" => $productEntity->name,
            "price" => $productEntity->price,
            "amount" => $productEntity->amount,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
    }

}