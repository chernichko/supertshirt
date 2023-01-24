<?php

namespace App\DTO;

use App\Models\ProductModel;

class BasketItemDTO
{
    public function __construct(private ProductModel $productModel)
    {
    }

    public function get(){
        return [
            'id' => md5($this->productModel->id . '-' . $this->productModel->acrticul),
            'name' => $this->productModel->name,
            'articul' => $this->productModel->articul,
            'color' => $this->productModel->color,
            'price' => $this->productModel->price,
        ];
    }

}
