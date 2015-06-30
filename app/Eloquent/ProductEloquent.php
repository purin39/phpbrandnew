<?php
namespace App\Eloquent;
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/06/25
 * Time: 12:55
 */

use Illuminate\Database\Eloquent\Model;

class ProductEloquent extends Model{

    protected $table = "products";

    protected $fillable = ["name","price","amount"];

    public function getPrice(){
        return $this->price."円";
    }

}