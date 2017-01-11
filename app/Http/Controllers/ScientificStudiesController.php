<?php

namespace App\Http\Controllers;

use App\PublicStudy;
use Illuminate\Http\Request;
use Illuminate\Html\HtmlServiceProvider;

use App\Publication;
use App\Citation;
use Carbon\Carbon;
use App\Project;
use App\Helpers\Helper;
use App\PublicStudyCategory;

class ScientificStudiesController extends Controller
{
    public function index($locale)
    {
        return view('scientific-studies');
    }

    public function publications($locale)
    {
        $publications = Publication::join('publicationcategories', 'publications.kategoriid', '=', 'publicationcategories.id')
            ->select('publications.*', 'publicationcategories.kategori', 'publicationcategories.kod')
            ->where([['publications.onay', '1'], ['publications.sil', '0']])
            ->where(function ($query) use ($locale) {
                $query->where('dil', $locale)
                    ->orWhere('dil', 'tum');
            })
            ->orderBy('publicationcategories.kod', 'asc')
            ->orderBy('publications.oncelik', 'asc')
            ->get();

        return view('publications', compact('publications'));
    }

    public function get_publication($locale, $slug)
    {
        $publication = Publication::where('slug', $slug)->get();

        $citations = Citation::join('publications', 'publications.id', '=', 'citations.publicationid')
            ->join('publicationcategories', 'publicationcategories.kod', '=', 'citations.atif_kategorisi')
            ->select('citations.*', 'publicationcategories.kategori')
            ->where([['citations.sil', '0'], ['publications.slug', $slug]])
            ->where(function ($query) use ($locale) {
                $query->where('dil', $locale)
                    ->orWhere('dil', 'tum');
            })
            ->orderBy('citations.atif_kategorisi')
            ->orderBy('citations.oncelik')
            ->get();


        if (!$publication)
            abort(404);

        return view("publication-detail", compact('publication', 'citations'));
    }

    public function projects($locale)
    {

        $finishedProjects = Project::where([['onay', '1'], ['sil', '0'], ['tur', '-1']])
            ->where(function ($query) use ($locale) {
                $query->where('dil', $locale)
                    ->orWhere('dil', 'tum');
            })
            ->get();

        $currentProjects = Project::where([['onay', '1'], ['sil', '0'], ['tur', '0']])
            ->where(function ($query) use ($locale) {
                $query->where('dil', $locale)
                    ->orWhere('dil', 'tum');
            })
            ->get();

        $futureProjects = Project::where([['onay', '1'], ['sil', '0'], ['tur', '1']])
            ->where(function ($query) use ($locale) {
                $query->where('dil', $locale)
                    ->orWhere('dil', 'tum');
            })
            ->get();


        return view('projects', compact('finishedProjects', 'currentProjects', 'futureProjects'));

    }


    public function get_project($locale, $slug)
    {
        $project = Project::where([['slug', $slug], ['onay', '1'], ['sil', '0']])
            ->where(function ($query) use ($locale) {
                $query->where('dil', $locale)
                    ->orWhere('dil', 'tum');
            })
            ->take(1)
            ->get();

        if (!($project))
            abort(404);

        return view('project-detail', compact('project'));
    }

    public function public_studies($locale)
    {
        $publicStudies = PublicStudy::join('public_study_categories as psc', 'psc.id', '=', 'public_studies.kategoriid')
            ->select('public_studies.*', 'psc.*')
            ->where([['public_studies.onay', '1'], ['public_studies.sil', '0']])
            ->where(function ($query) use ($locale) {
                $query->where('public_studies.dil', $locale)
                    ->orWhere('public_studies.dil', 'tum');
            })
            ->orderBy('public_studies.tarih', 'desc')
            ->orderBy('public_studies.id', 'desc')
            ->get();
        $publicStudyCategories = PublicStudyCategory::all();

        return view('public-studies', compact('publicStudies', 'publicStudyCategories'));
    }

    public function get_public_study($locale, $slug)
    {

        $publicStudies = PublicStudy::join('public_study_categories as psc', 'psc.id', '=', 'public_studies.kategoriid')
            ->select('public_studies.*', 'psc.*')
            ->where([['public_studies.onay', '1'], ['public_studies.sil', '0'], ['public_studies.slug', '<>', $slug]])
            ->where(function ($query) use ($locale) {
                $query->where('public_studies.dil', $locale)
                    ->orWhere('public_studies.dil', 'tum');
            })
            ->orderBy('public_studies.tarih', 'desc')
            ->orderBy('public_studies.id', 'desc')
            ->take(10)
            ->get();

        $publicStudyCategories = PublicStudyCategory::all();

        $publicStudy = PublicStudy::join('public_study_categories psc', 'psc.id', '=', 'public_studies.kategoriid')
            ->select('public_studies.*', 'psc.*')
            ->where([['public_studies.slug', $slug], ['public_studies.onay', '1'], ['public_studies.sil', '0']])
            ->where(function ($query) use ($locale) {
                $query->where('public_studies.dil', $locale)
                    ->orWhere('public_studies.dil', 'tum');
            })
            ->take(1)
            ->get();

        if (!$publicStudy)
            abort(404);

        return view('public-study-detail', compact('publicStudy', 'publicStudies', 'publicStudyCategories'));
    }
}