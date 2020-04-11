<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('invoice_id');
            $table->unsignedBigInteger('medecine_id');
            $table->integer('qty');
<<<<<<< HEAD
            $table->timestamps();
            $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->foreign('medecine_id')->references('id')->on('medecines');
=======
            $table->timestamps = false;
            $table->foreign('invoiceid')->references('id')->on('invoices');
            $table->foreign('medid')->references('id')->on('medecines');
>>>>>>> 1a2fe8876283d0c49e16e5717c20c0912515c9a0
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_details');
    }
}
