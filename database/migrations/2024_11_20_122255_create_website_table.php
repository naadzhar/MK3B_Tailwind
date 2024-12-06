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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('logo')->nullable(); // URL atau path logo, nullable
            $table->string('name')->unique(); // Nama unik untuk website
            $table->string('url'); // URL website
            $table->text('description')->nullable(); // Deskripsi website, nullable
            $table->decimal('price', 8, 2)->nullable(); // Harga, nullable
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};