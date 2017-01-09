<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\About;

class AboutController extends Controller
{

    public function index($locale = 'tr', $page = 'who-am-i')
    {
        $about = About::where([['page', $page], ['dil', $locale]])->get();

        if (is_null($about)) {
            abort(404);
        }

        return view('about', compact('about'));
    }

}
