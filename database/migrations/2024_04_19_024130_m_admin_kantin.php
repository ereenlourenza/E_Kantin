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
        Schema::create('m_admin_kantin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('namaAdminK');
            $table->string('nomorTelepon');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('m_admin_kantin');
    }
};
