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

        Schema::create('UserProfile', function (Blueprint $table) {
            $table->uuid('userProfileId')->primary();
            $table->string('nama', 255);
            $table->string('nomerHp', 13);
            $table->string('idPengguna', 16)->comment('KTP/SIM/PASSWORD');
            $table->string('provinsi', 255);
            $table->string('kota', 255);
            $table->enum('jenisKelamin', ["pria","wanita"]);
            $table->date('tanggLahir');
            $table->timestamps();

            // === TABLE RELASI ===
            $table->uuid('user_credentials_id');
            $table->foreign('user_credentials_id')->references('credentialsId')->on('UserCredentials');

            $table->uuid('user_role_id');
            $table->foreign('user_role_id')->references('userRoleId')->on('UserRole');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('UserProfile');
    }
};
