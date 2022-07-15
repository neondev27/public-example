<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class product_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 1000;
        \App\Models\product_category::factory($count)->create();
    }
}
