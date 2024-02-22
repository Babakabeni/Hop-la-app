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
        Schema::create('Fiches', function (Blueprint $table){
            $table->id();
            $table->string('Nom');
            $table->string('PostNom');
            $table->string('PreNom');
            $table->string('DateNaiss');
            $table->string('Tel');
            $table->string('Sexe');
            $table->string('Adresse');
            $table->string('Ante')->nullable();
            $table->string('Medoc')->nullable();
            $table->string('ResultatLabo')->nullable();
            $table->string('Medecin');
            $table->unsignedBigInteger('from_id');
            $table->foreign('from_id')->references('id')->on('Users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Fiches');
    }
};
