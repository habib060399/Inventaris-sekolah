<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePbpemasokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pbpemasok', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 20);
            $table->string('nama', 100);
            $table->text('alamat');
            $table->string('telp', 20);
            $table->string('kota', 50);
            $table->date('tgl_masuk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbpemasok');
    }
}
