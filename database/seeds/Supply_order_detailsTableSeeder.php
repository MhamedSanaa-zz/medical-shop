<?php

use Illuminate\Database\Seeder;
use App\supply_order_details;
class Supply_order_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(supply_order_details::class,10)->create();

    }
}
