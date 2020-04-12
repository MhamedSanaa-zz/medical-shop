<?php

use Illuminate\Database\Seeder;
use App\supply_order;
class Supply_ordersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(supply_order::class,10)->create();

    }
}
