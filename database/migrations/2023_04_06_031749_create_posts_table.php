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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('gender')->nullable();
            $table->string('nip')->nullable();
            $table->string('email')->nullable();
            $table->string('telp')->nullable();
            $table->string('expertise')->nullable();
            $table->string('laststudy')->nullable();
            $table->string('teachinghistory')->nullable();
            $table->string('research')->nullable();
            $table->string('communityservice')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('title')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('body')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};