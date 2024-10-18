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
        Schema::create('tbl_user_detail', function (Blueprint $table) {
            $table->id('id_user_detail');
            $table->string('nama', 30)->nullable();
            $table->unsignedBigInteger('id_jns_kelamin')->nullable();
            $table->string('no_telp', 30)->nullable();
            $table->text('alamat')->nullable();
            $table->string('nip', 50)->nullable();
            $table->string('devisi', 50)->nullable();
            $table->string('jabatan', 50)->nullable();
            $table->timestamps();

            // Relasi dengan tabel jenis_kelamin
            $table->foreign('id_jns_kelamin')->references('id_jns_kelamin')->on('tbl_jenis_kelamin')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_user_detail');
    }
};
