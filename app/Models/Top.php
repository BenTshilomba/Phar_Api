<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    use HasFactory;

    protected $fillable = [
        'Lock_my',
        'Telephone',
        'Fonction',
        'Sauvegarde',
        'Hopital',
        'Province',
        'Pays',
        'Cnom',
        'Imei',
        'Top'
    ];
}
