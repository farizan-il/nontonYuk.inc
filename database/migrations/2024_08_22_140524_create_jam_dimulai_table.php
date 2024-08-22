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

        Schema::create('JamDimulai', function (Blueprint $table) {
            $table->uuid('jamMulaiId')->primary();
            $table->time('jamTayang');
            $table->timestamps();

            // === RELASI TABLE ===
            $table->uuid('daftar_film_id');
            $table->foreign('daftar_film_id')->references('daftarFilmId')->on('DaftarFilm');
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
        Schema::dropIfExists('JamDimulai');
    }
};
