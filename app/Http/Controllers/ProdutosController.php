<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller{

    function produtos (){

        return view("site.produtos");

    }

}
