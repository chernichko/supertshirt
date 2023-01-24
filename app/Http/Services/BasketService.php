<?php

namespace App\Http\Services;

class BasketService
{
    public function init(){
        if(session()->missing('cart')){
            session()->put('cart'); //???
        }
    }

    public static function add($request){

        session()->put('cart',[$request['product_id'] => ['price'=>$request['product_price'],'quantity'=>$request['quantity']]]);

        dd($request->session());



    }

    public static function update($idInCart){

    }

    public static function delete($idInCart){

    }

}
