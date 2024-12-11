    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    // Définition d'une nouvelle migration pour créer la table pivot "contrat_partenaire"
    return new class extends Migration
    {
        public function up()
        {
            Schema::create('contrat_partenaire', function (Blueprint $table) {
                $table->id();
                $table->foreignId('contrat_id')->constrained()->onDelete('cascade');//Récup de l'id contrat + suppression en cascade si le contrat est supprimé
                $table->foreignId('partenaire_id')->constrained()->onDelete('cascade');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('contrat_partenaire');
        }
    };
