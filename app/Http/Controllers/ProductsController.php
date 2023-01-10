<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;

class ProductsController extends Controller
{
    public function index(){

        $products = ProductModel::paginate(5);

        #session()->put('cart', collect());

//        session('cart')->add([
//            'name' => 'test1',
//            'count' => 1,
//            'price' => 100.00
//        ]);
//
//        session('cart')->add([
//            'name' => 'test2',
//            'count' => 1,
//            'price' => 100.00
//        ]);
//
//        session('cart')->add([
//            'name' => 'test3',
//            'count' => 5,
//            'price' => 100.00
//        ]);

        dd(session('cart')
            ->sum(fn($item) => $item['count'] * $item['price'])
        );

        return view('products.index', compact('products'));
    }

    public function product(ProductModel $productModel){


        return view('products.product', ['product' => $productModel]);
    }
}
