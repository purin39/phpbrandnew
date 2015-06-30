<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/06/18
 * Time: 10:32
 */

namespace App\Http\Controllers;

use App\Services\Products;
//use App\Services\ProductsEloquentVersion as Products;
use Illuminate\Routing\Controller as MyController;
use Carbon\Carbon;
use \Input;

class ProductController extends MyController{

    /**
     * @return \Illuminate\View\View
     */
    protected function getLayout(){
        return view("product.layout");
    }


    public function index()
    {
        $products = Products::getList();
        $view = view("product.list",[
            "products" => $products
        ]);

        return $this->getLayout()->with("content",$view);
    }

    public function insert(){
        $data = [
            "name" => Input::get("name"),
            "price" => Input::get("price"),
            "amount" => Input::get("amount"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ];
        Products::insert($data);

        return $this->redirectToTop();
    }

    public function delete(){
        $id = Input::get("id");
        Products::delete($id);
        return $this->redirectToTop();
    }

    protected function redirectToTop(){
        return redirect("product/list");
    }


}