<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protocole_stat extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'Telephone',
        'Identifiant',
        'CodeP',
        'Jaime',
        'Vue',
        'Favoris',
        'Id_code'
    ];
}
