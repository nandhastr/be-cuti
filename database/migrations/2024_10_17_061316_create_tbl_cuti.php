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
        Schema::create('tbl_cuti', function (Blueprint $table) {
            $table->id('id_cuti');
            $table->unsignedBigInteger('id_user');
            $table->text('alasan');
            $table->date('tgl_diajukan');
            $table->date('mulai');
            $table->date('berakhir');
            $table->unsignedBigInteger('id_status_cuti');
            $table->string('perihal_cuti', 100);
            $table->text('alasan_verifikasi')->nullable();
            $table->timestamps();

            // Relasi dengan tabel user dan status_cuti
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('id_status_cuti')->references('id_status_cuti')->on('tbl_status_cuti')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_cuti');
    }
};
