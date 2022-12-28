<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePbpeminjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pbpeminjam', function (Blueprint $table) {
            // $table->id();
            // $table->string('kode', 20);
            // $table->string('nama', 200);
            // $table->text('alamat');
            // $table->string('telp', 15);
            // $table->string('kota', 50);
            // $table->date('tgl_masuk');
            // $table->text('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbpeminjam');
    }
}
