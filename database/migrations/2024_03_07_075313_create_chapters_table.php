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
        Schema::create('chapters', function (Blueprint $table) {
            $table->unsignedBigInteger('datanovel_id');
            $table->id();
            $table->longText('chapter')->nullable();
            $table->timestamps();

            // Menambahkan kunci asing ke datanovel_id yang merujuk ke kolom id di tabel datanovels
            $table->foreign('datanovel_id')->references('id')->on('datanovels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
