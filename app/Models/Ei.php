<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ei extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nc',
        'Dci',
        'Ct',
        'Firme',
        'Detail_ei',
        'Quantite',
        'Attitude',
        'Urgence',
        'Categorie',
        'Adresse',
        'Date',
        'Identifiant',
        'Telephone',
        'Hopital',
        'Code_ei'
    ];
}
