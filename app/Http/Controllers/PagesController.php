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
        $page = 'page';
        ($slug === 'contacts') ? $page='contacts' : '';
        ($slug === 'mediaplayers') ? $page='mediaplayers' : '';
        ($slug === 'software') ? $page='software' : '';

        return view('pages.' . $page);
    }
}
