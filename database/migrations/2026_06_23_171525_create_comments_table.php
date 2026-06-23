<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            // Khóa ngoại tới posts, xóa comment nếu post bị xóa
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            // Khóa ngoại tới users, xóa comment nếu user bị xóa
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('body'); // Yêu cầu dùng text
            $table->timestamps();
        });
    }

    public function down(): void
    {
        // Hoàn tác an toàn
        Schema::dropIfExists('comments');
    }
};