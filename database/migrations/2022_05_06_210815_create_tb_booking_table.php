<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_booking', function (Blueprint $table) {
            $table->id();
            $table->string('name_booking');
            $table->string('no_telp');
            $table->dateTime('date_booking');
            $table->binary('upload_booking');
            $table->string('status_booking');
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
        Schema::dropIfExists('tb_booking');
    }
}
