<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cake_order', function (Blueprint $table) {
            $table->integer('id_order');
            $table->integer('id_cake');
            $table->foreign('id_order')->references('id')->on('orders');
            $table->foreign('id_cake')->references('id')->on('cakes');
            $table->integer('amount');
            $table->integer('one_cake_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cake_order');
    }
};
