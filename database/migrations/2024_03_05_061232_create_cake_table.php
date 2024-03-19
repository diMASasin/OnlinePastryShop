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
        Schema::create('cakes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer('id_category');
            $table->integer('weight');
            $table->integer('price');
            $table->text('description');
            $table->integer('id_filling');
            $table->integer('id_type');
            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_filling')->references('id')->on('fillings');
            $table->foreign('id_type')->references('id')->on('types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cakes');
    }
};
