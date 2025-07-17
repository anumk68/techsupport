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
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key, UNSIGNED, AUTO_INCREMENT
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('blog_categories')->onDelete('set null');            
            $table->string('title', 255)->nullable(); // Blog title, nullable
            $table->string('slug', 255)->nullable(); // Slug, nullable
            $table->longText('short_description')->nullable(); // Short description, nullable
            $table->longText('description')->nullable(); // Main description, nullable
            $table->string('banner', 255)->nullable(); // Banner image, nullable
            $table->string('banner_alt', 255)->nullable(); // Banner alt text, nullable
            $table->string('banner_second', 255)->nullable(); // Second banner image, nullable
            $table->longText('description_second')->nullable(); // Second description, nullable
            $table->string('meta_title', 255)->nullable(); // Meta title, nullable
            $table->string('meta_img', 255)->nullable(); // Meta image, nullable
            $table->longText('meta_description')->nullable(); // Meta description, nullable
            $table->longText('meta_keywords')->nullable(); // Meta keywords, nullable
            $table->string('status', 255)->nullable(); // Status field, nullable
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
