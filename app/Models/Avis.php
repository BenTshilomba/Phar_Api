<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    protected $fillable = [
        'Hopital',
        'Province',
        'Date_send',
        'Time_send',
        'Avis',
        'CodeP',
        'Telephone',
        'Code_avis',
        'Pays',
        'Fonction'
    ];
}
