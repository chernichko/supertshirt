<?php

namespace App\Http\Controllers;

use App\DTO\BasketItemDTO;
use App\Interfaces\BasketInterface;
use App\Models\ProductModel;


class CartController extends Controller
{
    public function __construct(private readonly BasketInterface $basket)
    {
    }

    //TODO: прежде чем начинать, посмотри в google по запрос корзина товаров на laravel.
    // Нужен репозиторий\сервис для работы с корзиной BasketService с реализацие методом добавление\удаления и редактирования содержимого корзины.
    /*
     BasketService
        методы
    add()
    delete($idInCart)
    update($idInCart)

    init() -> вызывается в конструкторе (должен проверить или создать обьект cart в сессии)


    Доделать метод add() проверить если уже такой товар в корзине и если есть то +1.
    Обновление товара в корзине, сейчас будет менятся только кол-во. (Нужно на JS сделать аля +- кол-ва )
    Удаление товара из корзины.
    Обновлять счетчик товаров в шапке сайто после добавления товара в корзину.



    Articles доделать.
     */


    public function index()
    {
        return view('cart');
    }

    public function add(ProductModel $productModel)
    {
        $this->basket->add(new BasketItemDTO($productModel));

        return response()->json([
            'success' => true,
            'basketCounter' => $this->basket->getCartItems()->count(),
        ]);
    }

}
