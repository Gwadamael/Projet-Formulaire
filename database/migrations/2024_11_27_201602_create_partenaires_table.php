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
        // Définition d'une nouvelle migration pour créer la table "Partenaire"
        Schema::create('partenaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); //nom du partenaire
            $table->string('nature_activite');
            $table->string('adresse_officiel');
            $table->string('carte_identite')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partenaires');
    }
};
