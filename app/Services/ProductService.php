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
use MyShop\Model\Entity\ProductEntity;
use MyShop\Model\Repository\ProductRepository;


class ProductService {

    static public function getList(){
        return ProductRepository::getList();
    }

    static public function insert($data){
        $entity = new ProductEntity($data);
        \MyShop\Model\Repository\ProductRepository::insert($entity);

    }

}