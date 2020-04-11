<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedecinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('generic',100);
            $table->unsignedBigInteger('type_id');
            $table->tinyInteger('status');
            $table->double('price', 6, 3);
            $table->text('description');
<<<<<<< HEAD
            $table->foreign('type_id')->references('id')->on('types');
=======
            $table->timestamps = false;
            $table->foreign('typeid')->references('id')->on('types');
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
        Schema::dropIfExists('medecines');
    }
}
