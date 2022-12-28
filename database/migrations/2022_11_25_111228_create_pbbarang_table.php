<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePbbarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pbbarang', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 20);
            $table->string('nmBrg', 100);
            $table->string('satuan', 20);
            $table->integer('hrgBeli')->unsigned()->nullable();
            $table->integer('stock')->unsigned()->nullable();
            $table->string('ket', 100)->nullable();
            $table->text('status')->nullable();
            $table->string('merk', 35)->nullable();
            $table->year('tahun_pembuatan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbbarang');
    }
}
