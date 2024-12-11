<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Element de ma base de données
class Partenaire extends Model
{
    protected $fillable = [
        'nom',
        'nature_activite',
        'adresse_officiel',
        'carte_identite',
    ];

    public $timestamps = false;

    public function contrats()
    {
        return $this->belongsToMany(Contrat::class, 'contrat_partenaire', 'partenaire_id', 'contrat_id');
    }
}
