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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price', 8, 2);
            // $table->foreignId('category_id')->constrained()->onDelete('cascade');
            // $table->foreignId('subcategory_id')->constrained()->onDelete('cascade');
            // $table->timestamps();

            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id')->nullable(); // Nullable to allow menus without subcategories
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
