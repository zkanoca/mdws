<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Publication;
use App\Citation;
use Carbon\Carbon;
use App\Project;
use App\Helpers\Helper;

class ScientificStudiesController extends Controller
{
    public function index()
    {
        return view('scientific-studies');
    }

    public function publications()
    {
        $publications = Publication::join('publicationcategories', 'publications.kategoriid', '=', 'publicationcategories.id')
            ->select('publications.*', 'publicationcategories.kategori', 'publicationcategories.kod')
            ->where([['publications.onay', '1'], ['publications.sil', '0']])
            ->orderBy('publicationcategories.kod', 'asc')
            ->orderBy('publications.oncelik', 'asc')
            ->get();

        return view('publications', compact('publications'));
    }

    public function get_publication($slug)
    {
        $publication = Publication::where('slug', $slug)->get();

        $citations = Citation::join('publications', 'publications.id', '=', 'citations.publicationid')
            ->join('publicationcategories', 'publicationcategories.kod', '=', 'citations.atif_kategorisi')
            ->select('citations.*', 'publicationcategories.kategori')
            ->where([['citations.sil', '0'], ['publications.slug', $slug]])
            ->orderBy('citations.atif_kategorisi')
            ->orderBy('citations.oncelik')
            ->get();


        if (!$publication)
            abort(404);

        return view("publication-detail", compact('publication', 'citations'));
    }

    public function projects()
    {

        $finishedProjects = Project::where([['onay', '1'], ['sil', '0'], ['tur', '-1']])->get();
        $currentProjects = Project::where([['onay', '1'], ['sil', '0'], ['tur', '0']])->get();
        $futureProjects = Project::where([['onay', '1'], ['sil', '0'], ['tur', '1']])->get();


        return view('projects', compact('finishedProjects', 'currentProjects', 'futureProjects'));

    }


    public function get_project($slug)
    {
        $project = Project::where([['slug', $slug], ['onay', '1'], ['sil', '0']])->take(1)->get();

        if (!($project))
            abort(404);

        return view('project-detail', compact('project'));
    }


}


