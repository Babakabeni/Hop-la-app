<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiches extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Nom',
        'PostNom',
        'PreNom',
        'DateNaiss',
        'Tel',
        'Sexe',
        'Adresse',
        'Ant',
        'Medoc',
        'ResultatLabo',
        'Medecin',
        'from_id',
    ];
}
