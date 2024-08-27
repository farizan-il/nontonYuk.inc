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

        Schema::create('DetailKursi', function (Blueprint $table) {
            $table->uuid('detailKursiId')->primary();

            $table->uuid('kolom_kursi_id');
            $table->foreign('kolom_kursi_id')->references('kolomKursiId')->on('KolomKursi');
            
            $table->uuid('nomor_kursi_id');
            $table->foreign('nomor_kursi_id')->references('nomorKursiId')->on('NomorKursi');
            
            $table->string('row', 3);
            $table->string('seat', 3);
            $table->boolean('isBooking')->default(false);
            $table->timestamps();

            // === TABLE RELASI ===
            $table->uuid('daftar_teater_id');
            $table->foreign('daftar_teater_id')->references('daftarTeaterId')->on('DaftarTeater');
            
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DetailKursi');
    }
};
