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
            $table->string('nip', 50)->nullable();
            $table->string('nama', 30)->nullable();
            $table->enum('gender', ['Laki-laki', 'Perempuan']);
            $table->string('no_telp', 30)->nullable();
            $table->string('divisi', 50)->nullable();
            $table->string('jabatan', 50)->nullable();
            $table->text('alamat')->nullable();
            $table->timestamps();
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
