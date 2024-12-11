<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avocat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse_officiel',
        'cabinet_adresse',
    ];

    public $timestamps = false;

    public function contrats()
    {
        return $this->belongsToMany(Contrat::class);
    }
}
