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
        //factory(invoice_detail::class,10)->create();
        $invoices = factory(App\invoice::class,20)->create();
        $medecines = factory(App\medecine::class,20)->create();

        $invoices->first()->medecines()->sync($medecines);
    }
}
