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
        Schema::create('resturent_genarels', function (Blueprint $table) {
            $table->id();
            $table->char('name', 100);
            $table->binary('logo');
            $table->binary('banner');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('map');
            $table->text('mission');
            $table->text('vission');
            $table->text('goles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resturent_genarels');
    }
};
