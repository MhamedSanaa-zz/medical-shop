<?php

use Illuminate\Database\Seeder;
use App\role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(role::class,3)->create();

    }
}
