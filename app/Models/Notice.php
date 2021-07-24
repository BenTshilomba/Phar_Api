<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'Code_nc',
        'Nc',
        'Fg',
        'Dci',
        'Ct',
        'Indication',
        'Ci',
        'Dosage_posologie',
        'Ei',
        'Im',
        'Pec',
        'Composition',
        'Firme',
        'Cout',
        'Lieu',
        'Ma',
        'Precaution',
        'Es',
        'Autres',
        'Nouveau',
        'Payant',
        'Validation'
    ];
}
