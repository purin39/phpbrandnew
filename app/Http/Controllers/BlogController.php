<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/06/18
 * Time: 10:32
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as MyController;

class BlogController extends MyController {

    use BlogControllerTrait;

    public function getIndex()
    {
        if($this->validation()){
            return "this is index route";
        }else{
            return "validation failed";
        }
    }

    public function postProfile()
    {
        return "this is profile route";
    }

    public function anyLogin()
    {
        return "this is login route";
    }

}