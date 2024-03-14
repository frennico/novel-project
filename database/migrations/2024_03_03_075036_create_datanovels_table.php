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
        Schema::create('datanovels', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->id();
            $table->string('image')->nullable();
            $table->string('title');
            $table->longText('sinopsis');
            $table->string('genre');
            $table->timestamps();

            // Menambahkan kunci asing ke user_id yang merujuk ke kolom id di tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datanovels');
    }
};
