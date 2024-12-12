<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name'); // Name field
            $table->string('email'); // Email field, set as unique
            $table->string('google_id')->nullable(); // Email field, set as unique
            $table->string('password')->unique();// Password field
            $table->string('phone_number', 20)->nullable(); // Phone number field, with a max length of 20, nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
