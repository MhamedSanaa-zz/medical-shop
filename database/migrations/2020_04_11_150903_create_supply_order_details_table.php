<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplyOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply_order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('supply_orderid');
            $table->unsignedBigInteger('medid');
            $table->integer('batch_nbr');
            $table->integer('qty');
            $table->timestamps = false;
            $table->foreign('supply_orderid')->references('id')->on('supply_orders');
            $table->foreign('medid')->references('id')->on('medecines');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supply_order_details');
    }
}
