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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->unsignedBigInteger('user_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('company_name')->nullable();
            $table->mediumText('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postcode')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->enum('status',['pending','accepted','delivered','cancelled'])->default('pending');
            $table->boolean('is_urgent')->default(0);
            $table->boolean('is_accounted')->default(0);
            $table->string('cancel_reason')->nullable();
            $table->dateTime('cancel_date')->nullable();
            $table->text('order_notes')->nullable();
            $table->decimal('total_amount',16,2)->nullable();
            $table->enum('payment_mode',['cod','paypal','stripe','card','check','bank_transfer'])->nullable();
            $table->enum('payment_status',['paid','unpaid','pending','failed'])->nullable();
            $table->dateTime('expected_date')->nullable();
            $table->dateTime('delivered_date')->nullable();
            $table->unsignedBigInteger('shipping_charge_id')->default(null);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('shipping_charge_id')->references('id')->on('shippings')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
