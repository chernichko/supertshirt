<?php

namespace Database\Factories;

use App\Models\ProductModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = ProductModel::class;

    public function definition()
    {
        $color = ['black','white','yellow','black','red','green','blue','pink'];
        $size = ['XS','S','M','L'];

        return [
            'name' => $this->faker->name(),
            'articul' => Str::random(10),
            'price' => random_int(500,1500),
            'color' => $color[array_rand($color)],
            'size' => $size[array_rand($size)]
        ];
    }
}
