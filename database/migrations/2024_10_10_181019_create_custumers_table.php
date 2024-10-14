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
        Schema::create('custumers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 80);
            $table->string('last_name', 80);
            $table->string('email', 80)->unique();
            $table->string('password', 20);
            $table->string('phone', 15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custumers');
    }
};
