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
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('exercpt')->nullable();
            $table->longText('content');
            $table->string('feature_image')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->string('type')->default('post');
            $table->string('status')->default('draft');
            $table->dateTime('published_at');
            $table->foreignId('author_id')->references('id')->on('users');
            $table->foreignId('parent_id')->nullable()->references('id')->on('posts');
            $table->boolean('comment_status')->default(true);
            $table->integer('sort')->default(0);
            $table->integer('view_count')->default(0);
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
