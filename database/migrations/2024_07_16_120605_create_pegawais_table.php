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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->string('id_pegawai')->unique();
            $table->string('nama_pegawai');
            $table->string('penempatan');
            $table->string('jabatan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
