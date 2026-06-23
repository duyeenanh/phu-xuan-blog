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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();                                  // Có sẵn
            $table->string('name');                        // Thêm cột name
            $table->string('slug')->unique();              // Thêm cột slug (duy nhất)
            $table->boolean('is_active')->default(true);   // Thêm cột is_active
            $table->timestamps();                          // Có sẵn
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};