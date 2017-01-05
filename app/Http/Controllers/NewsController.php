<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\News;
use \App\About;
use \App\Publication;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        $about = About::all();
        $publications = Publication::all();

        return view('home', compact('news', 'about', 'publications'));
    }

    public function get_news($slug)
    {
        $news = News::where([['slug', $slug], ['onay', '1'], ['sil', '0']])->get();

        if (!$news)
            abort(404);

        return view('news-detail', compact('news'));
    }
}
