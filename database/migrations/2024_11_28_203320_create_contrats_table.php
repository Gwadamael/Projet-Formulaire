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
         // Définition d'une nouvelle migration pour créer la table "contrat"
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->date('date_contrat');// Date du contrat
            $table->date('date_terme');
            $table->string('contributions');
            $table->string('repartition');
            $table->date('date_clause');
            $table->string('juridiction_etat');
            $table->string('activite');
            $table->string('nom_partenariat');
            $table->string('adresse_siege');
            $table->integer('nombre_signataires');
            // $table->foreignId('partenaire_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('avocat_id')->constrained()->cascadeOnDelete();// Clé étrangère reliée a ma table avocat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrats');
    }
};
