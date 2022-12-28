<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePbnotabeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pbnotabeli', function (Blueprint $table) {
            $table->id();
            $table->string('noNota', 20);
            $table->date('tgl');
            $table->string('kdpemasok', 20)->nullable();
            $table->string('kdbarang', 20)->nullable();
            $table->integer('jml')->unsigned();
            $table->integer('potongan')->unsigned()->nullable();
            $table->string('ket', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbnotabeli');
    }
}
