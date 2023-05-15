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
        Schema::create('invoces', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->foreignId('customer_id')
                    ->references('id')
                    ->on('customers');
            $table->date('date');
            $table->foreignId('pay_mode_id')
                    ->references('id')
                    ->on('pay_mode_create');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoces');
    }
};
