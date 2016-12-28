<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\About;

class AboutController extends Controller
{

    public function index($page = 'ben-kimim')
    {
        $about = About::where('page', $page)->get();

        if (is_null($about)) {
            abort(404);
        }

        return view('about', compact('about'));
    }

}
