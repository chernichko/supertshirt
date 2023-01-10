<?php

namespace App\Http\Controllers;

class CartController extends Controller
{

    //TODO: прежде чем начинать, посмотри в google по запрос корзина товаров на laravel.
    // Нужен репозиторий\сервис для работы с корзиной BasketService с реализацие методом добавление\удаления и редактирования содержимого корзины.
    /*
     BasketService
        методы
    add()
    delete($idInCart)
    update($idInCart)

    init() -> вызывается в конструкторе (должен проверить или создать обьект cart в сессии)
     */


    public function index(){
        return view('cart');
    }

}
