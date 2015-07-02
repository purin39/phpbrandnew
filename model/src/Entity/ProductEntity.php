<?php
namespace MyShop\Model\Entity;
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/06/25
 * Time: 12:55
 */
class ProductEntity{

    public $name;

    public $price;

    public $amount;

    public function __construct($data = [])
    {
        $this->name = $data["name"];
        $this->price = $data["price"];
        $this->amount = $data["amount"];
    }

    public function getTaxPrice(){
        return $this->price * 1.05;
    }

    public function getTotalPrice(){
        return $this->price * $this->amount;
    }


}