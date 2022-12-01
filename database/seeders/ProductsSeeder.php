<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'name' => Str::random(10),
                'articul' => Str::random(10),
                'price' => random_int(500,1500),
                'color' => 'red',
                'size' => 'M'
            ],[
                'name' => Str::random(10),
                'articul' => Str::random(10),
                'price' => random_int(500,1500),
                'color' => 'yellow',
                'size' => 'L'
            ],[
                'name' => Str::random(10),
                'articul' => Str::random(10),
                'price' => random_int(500,1500),
                'color' => 'blue',
                'size' => 's'
            ],[
                'name' => Str::random(10),
                'articul' => Str::random(10),
                'price' => random_int(500,1500),
                'color' => 'green',
                'size' => 'M'
            ],[
                'name' => Str::random(10),
                'articul' => Str::random(10),
                'price' => random_int(500,1500),
                'color' => 'white',
                'size' => 'xs'
            ],[
                'name' => Str::random(10),
                'articul' => Str::random(10),
                'price' => random_int(500,1500),
                'color' => 'black',
                'size' => 'S'
            ],[
                'name' => Str::random(10),
                'articul' => Str::random(10),
                'price' => random_int(500,1500),
                'color' => 'purple',
                'size' => 'M'
            ],[
                'name' => Str::random(10),
                'articul' => Str::random(10),
                'price' => random_int(500,1500),
                'color' => 'pink',
                'size' => 'xs'
            ],[
                'name' => Str::random(10),
                'articul' => Str::random(10),
                'price' => random_int(500,1500),
                'color' => 'red',
                'size' => 'xs'
            ],[
                'name' => Str::random(10),
                'articul' => Str::random(10),
                'price' => random_int(500,1500),
                'color' => 'black',
                'size' => 'L'
            ],
        ]);
    }
}
