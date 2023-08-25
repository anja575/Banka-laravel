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
        Schema::create('transakcije', function (Blueprint $table) {
            $table->id();
            $table->integer('sifra');
            $table->string('naziv');
            $table->string('korisnik');
            $table->foreignId('radnik_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transakcije');
    }
};
