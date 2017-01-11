@extends('master')

@section('page_title')
{{trans('nav.projects')}}
@stop

@section('nav_scientific_studies_current')
current
@stop

@section('nav_projects_current')
current
@stop

@section('content')
<section class="page_title translucent_bg_pink t_align_c">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">{{trans('nav.projects')}}</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/{{App::getLocale()}}"
                                               class="color_grey_light_3 d_inline_m m_right_10">{{trans('nav.home')}}</a><i
                    class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i></li>
            <li class="m_right_8 f_xs_none"><a href="/{{App::getLocale()}}/scientific_studies"
                                               class="color_grey_light_3 d_inline_m m_right_10">{{trans('nav.scientific_studies')}}</a>
            </li>

        </ul>
    </div>
</section>
<section class="section_offset">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @if(count($currentProjects))
                <h3 class="page-header m_bottom_20">{{trans('project.continuing')}} {{trans('project.projects')}}</h3>
                <ul id="past-projects" class="vr_list_type_2">
                    @foreach($currentProjects as $cp)
                    <li class="m_bottom_12" id="past-project-{{$cp->id}}">
                        <div class="icon_wrap_size_0 circle color_grey_light_5 f_left">
                            <i class="icon-angle-right"></i>
                        </div>
                        <a class="color_dark color_dark_hover"
                           href="/{{App::getLocale()}}/scientific-studies/projects/{{$cp->slug}}">
                            {{$cp->proje }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endif

                @if(count($finishedProjects))
                <h3 class="page-header m_bottom_20">{{trans('project.finished')}} {{trans('project.projects')}}</h3>
                <ul id="past-projects" class="vr_list_type_2">
                    @foreach($finishedProjects as $fp)
                    <li id="current-project-{{$fp->id}}" class="m_bottom_12">
                        <div class="icon_wrap_size_0 circle color_grey_light_5 f_left">
                            <i class="icon-check"></i>
                        </div>
                        <a class="color_dark color_dark_hover"
                           href="/{{App::getLocale()}}/scientific-studies/projects/{{$fp->slug}}">
                            {{$fp->proje}}
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="col-md-4 col-lg-4">
                @if(count($futureProjects))
                <h3 class="page-header m_bottom_20">{{trans('project.planned')}} {{trans('project.projects')}}</h3>
                <ul id="past-projects" class="vr_list_type_2">
                    @foreach($futureProjects as $fp)
                    <li id="past-project-{{$fp->id}}">
                        <div class="icon_wrap_size_0 circle color_grey_light_5 f_left">
                            <i class="icon-star"></i>
                        </div>
                        <a class="color_dark color_dark_hover"
                           href="/{{App::getLocale()}}/scientific-studies/projects/{{$fp->slug}}">
                            {{$fp->proje}}
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</section>
@stop