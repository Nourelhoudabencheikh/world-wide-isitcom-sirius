<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sauveteurs extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'age',
       'datedenaissance',
    ];
}
