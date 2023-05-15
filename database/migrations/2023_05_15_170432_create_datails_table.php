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
        Schema::create('datails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoce_id')
                    ->references('id')
                    ->on('invoces');
            $table->foreignId('product_id')
                    ->references('id')
                    ->on('products');
            $table->integer('quantity')->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datails');
    }
};
