<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('m_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksi_id')->constrained('t_transaksi');
            $table->string('gambarQRCode')->nullable();
            $table->decimal('totalBayar', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('m_pembayaran');
    }
};
