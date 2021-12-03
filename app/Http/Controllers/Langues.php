<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Langues extends Controller
{
    public function langues()
    {
        
        $langue=Langues::all();
        $tr = new GoogleTranslate(); // Translates to 'en' from auto-detected language by default
        $tr->setSource(); // Detect language automatically
        $tr->setTarget('fr'); // Translate to Georgian
        echo $tr->translate('Hello World!');
    
        return view('welcome',compact('tr','langue'));
    }
}
