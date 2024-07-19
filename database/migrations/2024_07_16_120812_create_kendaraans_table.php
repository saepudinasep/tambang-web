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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->string('nama_kendaraan');
            $table->string('jenis_kendaraan');
            $table->string('plat_nomor');
            $table->double('jumlah_bbm');
            $table->double('konsumsi_bbm');
            $table->double('full_tank');
            $table->integer('status_kendaraan');
            $table->boolean('status_pakai');
            $table->string('service_terakhir');
            $table->string('service_berikutnya');
            $table->string('penempatan');
            $table->string('tanggal_pakai');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
