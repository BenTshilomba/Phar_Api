<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protocole extends Model
{
    use HasFactory;

    protected $fillable = [
        'Codep',
        'Intitule',
        'Categorie',
        'Service',
        'Atteste_selon',
        'Attesteur',
        'Hopital_attesteur',
        'Province_attesteur',
        'Telephone_attesteur',
        'Details',
        'Autres_detail',
        'Date',
        'Pays',
        'Fonction',
        'Validation'
    ];
}
