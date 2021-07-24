<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice_stat extends Model
{
    use HasFactory;

    protected $fillable = [
        'Telephone',
        'Identifiant',
        'Code_nc',
        'Nc',
        'Dci',
        'Jaime',
        'Vue',
        'Favoris',
        'Id_code'
    ];
}
