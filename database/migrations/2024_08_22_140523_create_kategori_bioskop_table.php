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

        Schema::create('KategoriBioskop', function (Blueprint $table) {
            $table->uuid('kategoriBioskopId')->primary();
            $table->string('namaKategori', 255);
            $table->string('warna', 255);
            $table->string('logo', 255);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('KategoriBioskop');
    }
};
