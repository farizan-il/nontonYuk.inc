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
        Schema::disableForeignKeyConstraints();

        Schema::create('Transaksi', function (Blueprint $table) {
            $table->uuid('transaksiId')->primary();
            $table->integer('jumlahTiket');
            $table->integer('totalHarga');
            $table->string('buktiPembayaran', 255);
            $table->enum('statusTransaksi', ["lunas","pending","batal"])->default('pending');
            $table->timestamps();

            // === TABLE RELASI ===
            $table->uuid('detail_transaksi_id');
            $table->foreign('detail_transaksi_id')->references('detailTransaksiId')->on('DetailTransaksi');
            
            $table->uuid('jam_mulai_id');
            $table->foreign('jam_mulai_id')->references('jamMulaiId')->on('JamDimulai');
            
            $table->uuid('user_credentials_id');
            $table->foreign('user_credentials_id')->references('credentialsId')->on('UserCredentials');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Transaksi');
    }
};
