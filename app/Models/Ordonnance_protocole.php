<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordonnance_protocole extends Model
{
    use HasFactory;

    protected $fillable = [
        'CodeP',
        'Nc',
        'Dci',
        'Fg',
        'Dose',
        'Dt',
        'Posologie',
        'Va',
        'Duree',
        'Note',
        'Id_code'
    ];
}
