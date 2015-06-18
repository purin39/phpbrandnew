<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/06/18
 * Time: 10:35
 */

namespace App\Http\Controllers;


trait BlogControllerTrait {


    protected function validation(){

        return true;

    }

    protected function parseName(){

        $name = Input::get("name","John");

        return trim($name);
    }

}