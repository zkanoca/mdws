<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use \App\News;

//use \App\About;
//use \App\Publication;
use \App;

class NewsController extends Controller
{
    public function index()
    {
        $locale = App::getLocale();

        $news = News::
            where([['onay', '1'], ['sil', '0']])
            ->where(function ($query) use ($locale) {
                $query->where('dil', $locale)
                    ->orWhere('dil', 'tum');
            })
            ->orderBy('tarih', 'desc')
            ->orderBy('id', 'desc')

            ->get();

        //$about = About::all();

        //$publications = Publication::all();

        //return view('home', compact('news', 'about', 'publications'));
        return view('news', compact('news'));
    }

    public function get_news($locale, $slug)
    {
        $news = News::where([['slug', $slug], ['onay', '1'], ['sil', '0']])
            ->where(function ($query) use ($locale) {
                $query->where('dil', 'tum')
                    ->orWhere('dil', $locale);
            })
            ->take(1)
            ->get();

        $otherNews = News::where([['slug', '<>', $slug], ['onay', '1'], ['sil', '0']])
            ->where(function ($query) use ($locale) {
                $query->where('dil', 'tum')
                    ->orWhere('dil', $locale);
            })
            ->orderBy('tarih', 'desc')
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();

        return view('news-detail', compact('news', 'otherNews'));
    }


}
