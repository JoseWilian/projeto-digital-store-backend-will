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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('amount');
            $table->decimal('price', 15, 2);
            $table->foreign('order_id')->references('id')->on('orders')->nullable();
            $table->foreign('customer_id')->references('id')->on('custumers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
