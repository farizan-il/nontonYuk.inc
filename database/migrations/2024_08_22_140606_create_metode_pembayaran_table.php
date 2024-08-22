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

        Schema::create('MetodePembayaran', function (Blueprint $table) {
            $table->uuid('metodePembayaranId')->primary();
            $table->string('Metode', 125);
            $table->string('noReferensi', 14);
            $table->string('namaReferensi', 125);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MetodePembayaran');
    }
};
