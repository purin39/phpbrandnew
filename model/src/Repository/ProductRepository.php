<?php
namespace MyShop\Model\Entity;
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/06/25
 * Time: 12:55
 */
class ProductRepository{

    /**
     * 商品の一覧を取得する。
     *
     * @return Entity
     */
    static public function getList(){
        $result = DB::table("product")->get();

        $return = [];
        foreach($result as $row){
            $return[] = new ProductEntity([
                "name" => $row->origin_name,
                "price" => $row->price,
                "amount" => $row->amount,
            ]);
        }

        return $result;
    }


}