<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cake', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer('weight');
            $table->integer('price');
            $table->text('descriptions');
            $table->integer('id_category');
            $table->integer('id_filling');
            $table->integer('id_type');
            $table->foreign('id_category')->references('id')->on('category');
            $table->foreign('id_filling')->references('id')->on('filling');
            $table->foreign('id_type')->references('id')->on('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cake');
    }
};
