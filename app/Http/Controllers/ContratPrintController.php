<?php

namespace App\Http\Controllers;
use App\Models\Contrat;
use Illuminate\Http\Request;

class ContratPrintController extends Controller
{
    public function print(Contrat $contrat)
    {
        // Retourne la vue d'impression avec les données du contrat
        return view('contrats.print', compact('contrat'));
    }
}
