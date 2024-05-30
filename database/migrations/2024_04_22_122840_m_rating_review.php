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
        Schema::create('m_rating_review', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained('m_menu');
            $table->foreignId('customer_id')->constrained('m_customer');
            $table->text('isiReview');
            $table->unsignedTinyInteger('rating');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('m_rating_review');
    }
};
