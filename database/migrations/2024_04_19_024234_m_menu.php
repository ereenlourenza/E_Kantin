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
        Schema::create('m_menu', function (Blueprint $table) {
            $table->id();
            $table->string('namaMenu');
            $table->decimal('hargaMenu', 8, 2);
            $table->string('gambarMenu')->nullable();
            $table->text('deskripsiMenu')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('m_menu');
    }
};
