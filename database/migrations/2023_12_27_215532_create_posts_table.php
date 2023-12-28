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
		// Post::create(['title' => 'My work post', 'excerpt' => 'Lorem ipsum', 'body' => 'Lorem ipsum dolor sit amet.', 'slug' => 'my-second-post', 'category_id' => 2]);
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
			$table->foreignId('user_id');
			$table->foreignId('category_id');
			$table->string('slug')->unique();
			$table->string('title');
			$table->text('excerpt');
			$table->text('body');
            $table->timestamps();
			$table->timestamp('published_at')->nullable();
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
