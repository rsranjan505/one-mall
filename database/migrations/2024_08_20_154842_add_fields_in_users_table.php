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
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name','first_name');
            $table->string('last_name',25)->after('first_name');
            $table->enum('user_type',['admin_user','seller','customer'])->default('customer')->after('last_name');
            $table->string('mobile',15)->after('email')->nullable();
            $table->boolean('is_active')->default(1)->after('password');
            $table->dateTime('last_login')->nullable()->after('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
