<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LangController extends Controller
{
    public function setLocale($lang){
        if (! in_array($lang, ['uk', 'ru',])) {
            abort(400);
        }

        App::setLocale($lang);

        return back(); //Перенаправляем назад на ту же страницу
    }
}
