<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C1 extends Controller
{
    public function without_parameters(){
        return "Controller1";
    }

    public function with_parameters($n1){
        return  "hi $n1 ";
    }
}