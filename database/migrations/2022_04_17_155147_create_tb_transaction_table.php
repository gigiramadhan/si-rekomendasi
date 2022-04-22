<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_transaction', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_telp');
            $table->string('tgl_bayar');
            $table->string('bukti_pembayaran');
            $table->string('status_transaksi');
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
        Schema::dropIfExists('tb_transaction');
    }
}
