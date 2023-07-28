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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned()->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('quntity')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
Schema::create('customers', function (Blueprint $table) {
    $table->id();
    $table->bigInteger('user_id')->unsigned()->index();
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    $table->string('first_name');
    $table->string('last_name');
    $table->string('email');
    $table->string('phone');
    $table->string('district');
    $table->string('city');
    $table->string('apartment');
    $table->string('zip');
    $table->string('aditional_information')->nullable();
    $table->string('amount');     
    $table->enum('statu',['panding','deliverd'])->default('panding');     
    $table->timestamps();
});

