<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends HomeController
{
    public function index(){
        return view('catalog');
    }

    public function product(){
        return view('product');
    }
}
