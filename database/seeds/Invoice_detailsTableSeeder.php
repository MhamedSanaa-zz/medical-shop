<?php

use Illuminate\Database\Seeder;
use App\invoice_detail;
class Invoice_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(invoice_detail::class,10)->create();
    }
}
