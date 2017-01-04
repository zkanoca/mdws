@extends('master')

@section('nav_scientific_studies_current')
current
@stop

@section('nav_projects_current')
current
@stop

@section('page_title')
@foreach($project as $p)
{{ $p->proje }}
@endforeach
@stop

@section('content')
<section class="section_offset">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @foreach($project as $p)
                <h3 class="page-header" id="project-detail-{{$p->id}}">{{$p->proje}}</h3>
                @endforeach
            </div>
            <div class="col-md-4 col-lg-4"></div>
        </div>
    </div>
</section>
@stop

