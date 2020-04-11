<?php

use Illuminate\Database\Seeder;
use App\supplier;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(supplier::class,10)->create();

    }
}
