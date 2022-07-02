<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRumahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_rumah', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('nama_perumahan');
            $table->string('alamat');
            $table->integer('harga');
            $table->string('fasilitas');
            $table->string('gambar');
            $table->string('rentang_harga');
            $table->string('rentang_luas_bangunan');
            $table->string('rentang_luas_tanah');
            $table->string('bobot_fasilitas');
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
        Schema::dropIfExists('tb_rumah');
    }
}
