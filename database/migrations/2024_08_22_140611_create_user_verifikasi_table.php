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

        Schema::create('UserVerifikasi', function (Blueprint $table) {
            $table->uuid('userVerifikasiId')->primary();
            $table->string('token', 6);
            $table->timestamp('expired');
            $table->timestamps();

            // == TABLE RELASI ==
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
        Schema::dropIfExists('UserVerifikasi');
    }
};
