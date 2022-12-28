<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePbbarangkeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pbbarangkeluar', function (Blueprint $table) {
            $table->id();
            $table->string('noNota', 20);
            $table->date('tgl');
            $table->string('kdPeminjam', 20);
            $table->string('kdBrg', 20);
            $table->integer('jml')->unsigned();
            $table->integer('potongan')->unsigned();
            $table->string('ket', 100);
            $table->date('tgl_keluar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbbarangkeluar');
    }
}
