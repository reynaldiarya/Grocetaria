<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTunaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tunai', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->foreignId('id_pemesanan');
            $table->date('tgl_pembayaran');
            $table->integer('nominal_pembayaran');
            $table->boolean('stts_pembayaran');
            $table->integer('uang_terima');
            $table->integer('uang_kembali');
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
        Schema::dropIfExists('tunai');
    }
};
