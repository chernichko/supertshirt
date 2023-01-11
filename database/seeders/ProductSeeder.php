<?php

namespace Database\Seeders;

use App\Models\ProductModel;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO: fix it!
        ProductModel::factory()->count(10)->create();
    }
}
