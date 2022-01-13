<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use PhpOption\None;

class PagesController extends Controller
{
    public function mainPage()
    {
        return view('pages.index');
    }

    public function page($slug)
    {
        $page='';
        $slg='';
        ($slug === 'contacts') ? $slg='contacts' : '';
        ($slug === 'products') ? $slg='products' : '';
        ($slug === 'mediaplayers') ? $slg='mediaplayers' : '';
        ($slug === 'software') ? $slg='software' : '';

        if(!$slg){
            $page = Page::where('slug', $slug)->firstOrFail();
            $slg = 'page';
        }

        return view('pages.' . $slg, [
            'page' => $page
        ]);
    }
}
