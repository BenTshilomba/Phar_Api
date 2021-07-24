<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Im extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'Dci1',
        'Dci2',
        'Im',
        'Niveau_c'
    ];
}
