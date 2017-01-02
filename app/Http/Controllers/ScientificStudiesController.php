<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Publication;

class ScientificStudiesController extends Controller
{
    public function index()
    {
        return view('scientific-studies');
    }

    public function publications()
    {
        $publications = Publication::where([['onay', '=', 1], ['sil', '=', 0]])->get();

        return view('publications', compact('publications'));
    }
}
