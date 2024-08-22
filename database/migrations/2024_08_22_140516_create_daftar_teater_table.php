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

        Schema::create('DaftarTeater', function (Blueprint $table) {
            $table->uuid('daftarTeaterId')->primary();
            $table->string('namaTeater', 255);
            $table->timestamps();

            // === TABLE RELASI ===
            $table->uuid('kelas_teater_id');
            $table->foreign('kelas_teater_id')->references('kelasTeaterId')->on('KelasTeater');
            $table->uuid('daftar_bioskop_id');
            $table->foreign('daftar_bioskop_id')->references('daftarBioskopId')->on('DaftarBioskop');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DaftarTeater');
    }
};
