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

        Schema::create('DaftarBioskop', function (Blueprint $table) {
            $table->uuid('daftarBioskopId')->primary();
            $table->string('namaBioskop', 255);
            $table->timestamps();

            // relasi table
            $table->uuid('kategori_bioskop_id');
            $table->foreign('kategori_bioskop_id')->references('kategoriBioskopId')->on('KategoriBioskop');
            $table->uuid('lokasi_bioskop_id');
            $table->foreign('lokasi_bioskop_id')->references('lokasiBioskopId')->on('LokasiBioskop');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DaftarBioskop');
    }
};
