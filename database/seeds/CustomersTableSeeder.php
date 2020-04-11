<?php

use Illuminate\Database\Seeder;
use App\customer;
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(customer::class,10)->create();
    }
}
