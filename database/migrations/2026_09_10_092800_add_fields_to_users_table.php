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
            $table->string('mobile_no', 15)->nullable();
            $table->string('state')->nullable();
            $table->string('district')->nullable();
            $table->string('village')->nullable();
            $table->string('pincode', 10)->nullable();
            $table->string('preferred_language')->nullable();
            $table->string('farmer_image')->nullable();
            $table->string('aadhar_number')->nullable();
            $table->enum('role', ['user', 'admin'])->default('user');
            $table->string('otp')->nullable();
            $table->dateTime('otp_expired_at')->nullable();
            $table->string('email', 255)->nullable()->change();
            $table->string('password')->nullable()->change();
            $table->string('farmer_id')->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'mobile_no',
                'state',
                'district',
                'village',
                'pincode',
                'preferred_language',
                'farmer_image',
                'aadhar_number',
                'role',
                'otp',
                'otp_expired_at',
                'farmer_id',
            ]);
            $table->string('email', 255)->nullable(false)->change();
            $table->string('password')->nullable(false)->change();
        });
    }
};
