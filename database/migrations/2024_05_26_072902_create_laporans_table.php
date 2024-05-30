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
    Schema::create('laporans', function (Blueprint $table) {
        $table->id();
        $table->date('tanggal');
        $table->string('nama_produk');
        $table->string('kategori_produk');
        $table->integer('harga_produk');
        $table->integer('stok_awal');
        $table->integer('terjual');
        $table->integer('sisa_stok');
        $table->integer('total_pemasukan');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
