<?php

namespace App\Http\Controllers;

use Session;

class LanguageController extends Controller
{
    public function setLanguage($lang)
    {
        Session::put('lang', $lang);

        return redirect()->route('tasks.index');
    }
}
