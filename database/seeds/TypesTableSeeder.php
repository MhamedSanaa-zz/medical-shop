<?php

use Illuminate\Database\Seeder;
use App\type;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(type::class,10)->create();
    }
}
