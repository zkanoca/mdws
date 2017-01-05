<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class HomeController extends Controller
{
    //
    public function index()
    {
        $news = News::join('categories', 'categories.id', '=', 'news.kategoriid')
            ->select('news.*', 'category')
            ->where([['onay', '1'], ['sil', '0']])
            ->orderBy('tarih', 'desc')
            ->take(4)
            ->get();


        return view('home', compact('news'));
    }
}
