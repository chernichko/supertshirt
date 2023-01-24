<?php

namespace App\Http\Services;

use App\DTO\BasketItemDTO;
use App\Interfaces\BasketInterface;
use Illuminate\Support\Collection;

class BasketService implements BasketInterface
{
    public function __construct()
    {
        if (session()->missing('cart')) {
            session()->put('cart', collect());
        }
    }

    public function getCartItems(): Collection
    {
        return session('cart', collect());
    }

    public function add(BasketItemDTO $basketItemDTO, int $quantity = 1): bool
    {
        $cartItems = $this->getCartItems();

        $cartItems->add($basketItemDTO->get() + ['quantity' => $quantity]);

        session()->put('cart', $cartItems);

        return true;
    }

    public function update(string $cartItemId): bool
    {

    }

    public function delete(string $cartItemId): bool
    {

    }

}
