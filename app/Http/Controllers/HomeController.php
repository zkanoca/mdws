<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\News;
use App\Service;
use App\CitationCount;
use App\PublicationCount;
use App\Publication;

class HomeController extends Controller
{
    //
    public function index($locale)
    {
        $news = News::join('categories', 'categories.id', '=', 'news.kategoriid')
            ->select('news.*', 'category')
            ->where([['onay', '1'], ['sil', '0']])
            ->where(function ($query) use ($locale) {
                $query->where('dil', $locale)
                    ->orWhere('dil', 'tum');
            })
            ->orderBy('tarih', 'desc')
            ->take(4)
            ->get();

        $trainings = Service::join('service_categories as sc', 'sc.id', '=', 'services.kategoriid')
            ->select('sc.slug as category_slug',
                'services.slug as content_slug',
                'services.resimler',
                'services.resim',
                'services.baslik',
                'services.tarih',
                'services.id',
                'services.kategoriid'
            )
            ->where([['services.onay', '1'], ['services.sil', '0'], ['sc.category', 'trainings']])
            ->where(function ($query) use ($locale) {
                $query->where('services.dil', $locale)
                    ->orWhere('services.dil', 'tum');
            })
            ->take(10)
            ->get();

        $citationCounts = CitationCount::where('yil', '<=', date('Y'))
            ->orderBy('yil', 'desc')
            ->get();

        $publicationCounts = PublicationCount::where('yil', '<=', date('Y'))
            ->orderBy('yil', 'desc')
            ->get();

        $publications = Publication::where([['sil', '0'], ['onay', '1']])
            ->where(function ($query) use ($locale) {
                $query->where('dil', $locale)
                    ->orWhere('dil', 'tum');
            })
            ->orderBy('tarih', 'desc')
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();

        return view('home', compact('news', 'trainings', 'citationCounts', 'publications', 'publicationCounts'));
    }
}
