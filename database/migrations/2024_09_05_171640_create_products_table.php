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
            $table->string('name');
            $table->string('slug');
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('sub_category');
            $table->unsignedBigInteger('collection')->nullable();  // it is a 3rd level of category
            $table->decimal('price', 8, 2);
            $table->decimal('sale_price', 8, 2)->nullable();
            $table->decimal('quantity', 8, 2)->default(0);
            $table->text('short_description');
            $table->text('description');
            $table->text('long_description')->nullable();
            $table->enum('status',['published','scheduled','inactive'])->default('inactive')->nullable();
            $table->enum('type',['simple','variable'])->default('simple')->nullable();
            $table->enum('tags',['normal','standard','premium'])->default('normal')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_popular')->default(0);
            $table->boolean('is_trending')->default(0);
            $table->boolean('is_latest')->default(0);
            $table->boolean('is_top_selling')->default(0);
            $table->boolean('out_of_stock')->default(0);
            $table->boolean('is_active')->default(1);
            $table->timestamps();

            $table->foreign('category')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('sub_category')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('collection')->references('id')->on('categories')->onDelete('cascade');

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
