<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Langues;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App;
class LanguesController extends Controller
{
    public function index()
    {
        
        $langue=Langues::all();
        $tr = new GoogleTranslate(); // Translates to 'en' from auto-detected language by default
        $tr->setSource(); // Detect language automatically
        
        $tr->setTarget(App::getLocale()); // Translate to Georgian
      

        return view('front.home',compact('tr','langue'));
    }
    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }
        return Redirect::back();
    }
}
