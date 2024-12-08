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
        // Définition d'une nouvelle migration pour créer la table "avocats"
        Schema::create('avocats', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); //Nom de l'avocat
            $table->string('adresse_officiel');// adresse mail de l'avocat
            $table->string('cabinet_adresse'); // Adresse du cabinet
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Suppression de la table "avocats" si elle existe
        Schema::dropIfExists('avocats');
    }
};
