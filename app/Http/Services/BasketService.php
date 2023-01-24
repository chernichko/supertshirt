<?php

namespace App\Http\Services;

class BasketService
{
    public function init(){
        if(session()->missing('cart')){
            session()->put('cart'); //???
        }
    }

    public function add(ProductModel $productModel){


        dd($request->session());

        //datatransferobject

    }

    public function update($idInCart){

    }

    public function delete($idInCart){

    }

}
