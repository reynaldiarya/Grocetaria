<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatemBankingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mbanking', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->foreignId('id_pemesanan');
            $table->date('tgl_pembayaran');
            $table->integer('nominal_pembayaran');
            $table->boolean('stts_pembayaran');
            $table->string('kode_va');
            $table->text('bukti_transfer');
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
        Schema::dropIfExists('mbanking');
    }
};
