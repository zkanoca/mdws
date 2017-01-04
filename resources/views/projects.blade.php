@extends('master')

@section('page_title')
Projects
@stop

@section('nav_scientific_studies_current')
current
@stop

@section('nav_projects_current')
current
@stop

@section('content')

<section class="section_offset">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @if(count($currentProjects))
                <h3 class="page-header color_green m_bottom_20 t_align_c">Current Projects</h3>
                <ul id="past-projects">
                    @foreach($currentProjects as $cp)
                    <li class="m_bottom_12" id="past-project-{{$cp->id}}">
                        <!--div class="icon_wrap_size_0 circle color_grey_light_5 f_left">
                            <i class="icon-check"></i>
                        </div-->
                        <a class="color_green color_green_hover" href="/scientific-studies/projects/{{$cp->slug}}">{{
                            $cp->proje }}</a>


                    </li>
                    @endforeach
                </ul>
                @endif

                @if(count($finishedProjects))
                <h3 class="page-header color_yellow m_bottom_20 t_align_c">Finished Projects</h3>
                <ul id="past-projects">
                    @foreach($finishedProjects as $fp)
                    <li id="current-project-{{$fp->id}}" class="m_bottom_12">
                        <!--div class="icon_wrap_size_0 circle color_grey_light_5 f_left">
                            <i class="icon-angle-right"></i>
                        </div-->
                        <a class="color_yellow color_yellow_hover" href="/scientific-studies/projects/{{$fp->slug}}">{{$fp->proje}}</a>

                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="col-md-4 col-lg-4">
                @if(count($futureProjects))
                <h3 class="page-header color_pink m_bottom_20 t_align_c">Future Projects</h3>
                <ul id="past-projects">
                    @foreach($futureProjects as $fp)
                    <li id="past-project-{{$fp->id}}">
                        <!--div class="icon_wrap_size_0 circle color_grey_light_5 f_left">
                            <i class="icon-star"></i>
                        </div-->
                        <a class="color_pink color_pink_hover" href="/scientific-studies/projects/{{$fp->slug}}">{{$fp->proje}}</a>

                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</section>
@stop