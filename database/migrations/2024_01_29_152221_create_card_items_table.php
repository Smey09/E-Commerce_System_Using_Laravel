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
        Schema::create('card_items', function (Blueprint $table) {
            $table->id();
            $table->integer('sesion_id');
            $table->integer('quality');
            $table->text('description');
            // $table->foreignId("product_id")->references("pro")
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_items');
    }
};
