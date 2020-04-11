<?php

use Illuminate\Database\Seeder;
use App\invoice;
class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(invoice::class,10)->create();

    }
}
