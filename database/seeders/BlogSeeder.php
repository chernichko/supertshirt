<?php

namespace Database\Seeders;

use App\Models\BlogModel;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogModel::factory()->count(10)->create();
    }
}
