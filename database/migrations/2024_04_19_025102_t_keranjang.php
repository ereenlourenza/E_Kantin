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
        Schema::create('t_keranjang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('m_customer');
            $table->foreignId('menu_id')->constrained('m_menu');
            $table->unsignedInteger('qty');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_keranjang');
    }
};
