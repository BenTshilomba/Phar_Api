<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Godelieve_secur extends Model
{
    use HasFactory;

    protected $fillable = [
        'Expiration',
        'Avertissement',
        'Blocage',
        'Blaspheme'
    ];
}
