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

<?php
$status['-1'] = trans('project.finished');
$status['0'] = trans('project.continuing');
$status['1'] = trans('project.planning');
?>
<section class="page_title translucent_bg_pink t_align_c">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">{{trans('nav.projects')}}</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/{{App::getLocale()}}"
                                               class="color_grey_light_3 d_inline_m m_right_10">{{trans('nav.home')}}</a><i
                    class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i></li>
            <li class="m_right_8 f_xs_none"><a href="/{{App::getLocale()}}/scientific-studies"
                                               class="color_grey_light_3 d_inline_m m_right_10">{{trans('nav.scientific_studies')}}</a><i
                    class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i></li>
            <li class="f_xs_none"><a href="/{{App::getLocale()}}/scientific-studies/projects"
                                     class="color_grey_light_3 d_inline_m">{{trans('nav.projects')}}</a></li>
        </ul>
    </div>
</section>
@foreach($project as $p)
<section class="section_offset">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9">
                <h3 class="fw_light page-header color_dark" id="project-detail-{{$p->id}}">{{$p->proje}}</h3>

                <div>
                    {!!$p->aciklama!!}
                </div>
                <h4 class="fw_light page-header color_dark">{{trans('project.ekip')}}</h4>

                <div>
                    {!!$p->ekip!!}
                </div>

            </div>
            <div class="col-md-3 col-lg-3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th colspan="2">{{trans('project.project_details')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th class="bg_light_2">{{trans('project.project_code')}}</th>
                        <td>{{$p->kod}}</td>
                    </tr>
                    <tr>
                        <th class="bg_light_2">{{trans('project.status')}}</th>
                        <td>{{$status[$p->tur]}}</td>
                    </tr>
                    <tr>
                        <th class="bg_light_2">{{trans('project.budget')}}</th>
                        <td>{{$p->butce}} {{$p->para_birimi}}</td>
                    </tr>
                    <tr>
                        <th class="bg_light_2">{{trans('project.date_start')}}</th>
                        <td>{{date('d/m/Y', strtotime($p->tarih))}}</td>
                    </tr>
                    <tr>
                        <th class="bg_light_2">{{trans('project.date_finish')}}</th>
                        <td>{{date('d/m/Y', strtotime($p->bitis_tarihi))}}</td>
                    </tr>
                    <tr>
                        <th class="bg_light_2">{{trans('project.duration')}}</th>
                        <td>
                            {{$p->sure}}
                            @if($p->ek_sure)
                            <i class="icon-plus"></i> {{$p->ek_sure}}
                            @endif
                            {{trans('project.months')}}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endforeach
@stop