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
        Schema::create('coupans', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->enum('type',['fixed','percentage'])->default('fixed');
            $table->string('value');
            $table->integer('min_purchase_amount')->default(0)->nullable();
            $table->integer('used')->nullable();
            $table->dateTime('from_date');
            $table->dateTime('to_date');
            $table->tinyInteger('is_active')->default(1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupans');
    }
};
