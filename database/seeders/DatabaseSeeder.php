<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
//       \App\Models\Orders::factory(30)->hasSaleGoodsFactory(3)->create();
       \App\Models\Orders::factory(30)->hasOrderFactory(rand(1,3))->create();
    }
}
