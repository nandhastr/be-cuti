<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // 2014_10_12_000000_create_users_table.php
    // 2014_10_12_100000_create_password_reset_tokens_table
    // 2019_12_14_000001_create_personal_access_tokens_table
    // 2019_08_19_000000_create_failed_jobs_table
    // 2024_10_17_061617_create_personal_access_tokens_table
    // 2024_10_17_061617
    /**
     * Run the migrations.
     */ 
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('username', 30);
            $table->string('email', 191)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('id_user_level');
            $table->unsignedBigInteger('id_user_detail');
            $table->rememberToken();
            $table->timestamps();

            // Relasi dengan tabel user_level dan user_detail
            $table->foreign('id_user_level')->references('id_user_level')->on('tbl_user_level')->onDelete('cascade');
            $table->foreign('id_user_detail')->references('id_user_detail')->on('tbl_user_detail')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
