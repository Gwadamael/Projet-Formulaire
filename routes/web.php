<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContratPrintController;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/contrats/{contrat}/print', [ContratPrintController::class, 'print'])->name('contrats.print');

