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
        Schema::create('menues', function (Blueprint $table) {
            $table->id();
            $table->char('food_name', 100);
            $table->char('category_name', 100);
            $table->string('rating');
            $table->string('update_price');
            $table->string('old_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menues');
    }
};
