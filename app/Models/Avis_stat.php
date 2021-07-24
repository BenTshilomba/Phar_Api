<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis_stat extends Model
{
    use HasFactory;

    protected $fillable = [
        'Telephone',
        'Identifiant',
        'Code_avis',
        'Jaime',
        'Id_code'
    ];
}
