<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRumahPengelolaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_rumah_pengelola', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('nama_perumahan');
            $table->string('alamat');
            $table->string('harga');
            $table->string('fasilitas');
            $table->binary('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_rumah_pengelola');
    }
}
