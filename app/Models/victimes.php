<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class victimes extends Model
{
    
  
    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'etat',
       'datedesauvetage',
    ];
}
