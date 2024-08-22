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

        Schema::create('DetailTransaksi', function (Blueprint $table) {
            $table->uuid('detailTransaksiId')->primary();
            $table->string('namaPembeli', 255);
            $table->string('username', 255);
            $table->string('email', 255);
            $table->string('judulFilm', 255);
            $table->string('namaBioskop', 255);
            $table->string('namaTeater', 255);
            $table->date('tanggalTayang');
            $table->string('kolomKursi', 5);
            $table->string('nomorKursi', 5);
            $table->time('jamTayang');
            $table->timestamps();

            // === TABLE RELASI ===
            $table->uuid('metode_pembayaran_id');
            $table->foreign('metode_pembayaran_id')->references('metodePembayaranId')->on('MetodePembayaran');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DetailTransaksi');
    }
};
