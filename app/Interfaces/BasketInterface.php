<?php

namespace App\Interfaces;

use App\DTO\BasketItemDTO;
use Illuminate\Support\Collection;

interface BasketInterface
{
    public function getCartItems(): Collection;

    public function add(BasketItemDTO $basketItemDTO):bool;

    public function update(string $cartItemId):bool;

    public function delete(string $cartItemId):bool;
}
