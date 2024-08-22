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

        Schema::create('UserCredentials', function (Blueprint $table) {
            $table->uuid('credentialsId')->primary();
            $table->string('username', 255);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->boolean('isActive')->default(0);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('UserCredentials');
    }
};
