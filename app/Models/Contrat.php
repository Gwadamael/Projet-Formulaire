<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contrat extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_contrat',
        'date_terme',
        'contributions',
        'repartition',
        'date_clause',
        'juridiction_etat',
        'activite',
        'nom_partenariat',
        'adresse_siege',
        'nombre_signataires',
        // 'partenaire_id',
        'avocat_id',
    ];

    // Relation many-to-many avec Partenaire
    public function partenaires()
    {
        return $this->belongsToMany(Partenaire::class, 'contrat_partenaire', 'contrat_id', 'partenaire_id');
    }

    // Relation "un à plusieurs" avec Avocat
    public function avocat()
    {
        return $this->belongsTo(Avocat::class);
    }
}
