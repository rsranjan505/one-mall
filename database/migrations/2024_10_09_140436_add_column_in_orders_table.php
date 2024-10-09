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
        Schema::table('orders', function (Blueprint $table) {
            $table->tinyInteger('is_coupan_applied')->default(0)->after('shipping_charge_id');
            $table->unsignedBigInteger('coupan_id')->nullable()->after('is_coupan_applied');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('is_coupan_applied');
            $table->dropColumn('coupan_id');
        });
    }
};
