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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('slug')->unique();
            $table->timestamps();
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('excerpt');
            $table->text('body')->nullable();
            $table->text('extra')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->Integer('price');
//            $table->string('image');
//            $table->string('image2')->nullable();
//            $table->string('image3')->nullable();
            $table->string('materials');
            $table->string('url');
            $table->Integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
