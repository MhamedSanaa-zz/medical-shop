<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(MedecinesTableSeeder::class);
        $this->call(StocksTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(Supply_ordersTableSeeder::class);
        $this->call(Supply_order_detailsTableSeeder::class);
        $this->call(InvoicesTableSeeder::class);
        $this->call(Invoice_detailsTableSeeder::class);

    }
}
