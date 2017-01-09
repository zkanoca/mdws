<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\News;
use App\Training;
use App\CitationCount;
use App\PublicationCount;
use App\Publication;

class HomeController extends Controller
{
    //
    public function index()
    {
        setlocale(LC_ALL, 'tr_TR.utf8');

        $news = News::join('categories', 'categories.id', '=', 'news.kategoriid')
            ->select('news.*', 'category')
            ->where([['onay', '1'], ['sil', '0']])
            ->orderBy('tarih', 'desc')
            ->take(4)
            ->get();


        $trainings = Training::where([['onay', '1'], ['sil', '0']])->take(8)->get();

        $citationCounts = CitationCount::where('yil', '<=', date('Y'))
            ->orderBy('yil', 'desc')
            ->get();

        $publicationCounts = PublicationCount::where('yil', '<=', date('Y'))
            ->orderBy('yil', 'desc')
            ->get();


        return view('home', compact('news', 'trainings', 'citationCounts', 'publicationCounts'));
    }


}
