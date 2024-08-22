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

        Schema::create('LokasiBioskop', function (Blueprint $table) {
            $table->uuid('lokasiBioskopId')->primary();
            $table->string('provinsi', 255);
            $table->string('kota', 255);
            $table->timestamps();

            // === TABLE RELASI ===
            $table->uuid('user_credentials_id');
            $table->foreign('user_credentials_id')->references('credentialsId')->on('user_credentials');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LokasiBioskop');
    }
};
