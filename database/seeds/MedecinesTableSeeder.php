<?php

use Illuminate\Database\Seeder;
use App\medecine;
class MedecinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(medecine::class,10)->create();

    }
}
