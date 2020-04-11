<?php

use Illuminate\Database\Seeder;
use App\stock;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(stock::class,10)->create();

    }
}
