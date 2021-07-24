<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comm extends Model
{
    use HasFactory;

    protected $fillable = [
        'Textname',
        'Textemail',
        'Textphone',
        'Textmessage'
    ];
}
