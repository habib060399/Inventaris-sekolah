<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePbuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pbuser', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 20);
            $table->string('nama', 100);
            $table->string('email', 50); 
            $table->string('telp', 15);
            $table->string('kota', 50);
            $table->text('jabatan');          
            $table->integer('level')->unsigned();
            $table->string('uname', 20);
            $table->string('upass', 100);
            $table->timestamp('tgl_masuk') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbuser');
    }
}
