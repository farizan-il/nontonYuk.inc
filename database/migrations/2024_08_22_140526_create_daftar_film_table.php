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

        Schema::create('DaftarFilm', function (Blueprint $table) {
            $table->uuid('daftarFilmId')->primary();
            $table->string('judulFilm', 255);
            $table->string('sampulFilm', 255);
            $table->text('sinopsis');
            $table->string('durasi');
            $table->string('rating', 10);
            $table->string('produser', 255);
            $table->string('director', 255);
            $table->string('penulis', 255);
            $table->string('pemeran', 255);
            $table->string('distributor', 255);
            $table->timestamps();

            // === RELASI TABLE
            $table->uuid('genre_film_id');
            $table->foreign('genre_film_id')->references('genreFilmId')->on('GenreFilm');

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DaftarFilm');
    }
};
