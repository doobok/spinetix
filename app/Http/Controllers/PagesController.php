<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function mainPage()
    {
        return view('pages.index');
    }

    public function page($slug)
    {
        return view('pages.page');
    }
}
