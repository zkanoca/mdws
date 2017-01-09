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
$status['-1'] = 'Finished';
$status['0'] = 'Continuing';
$status['1'] = 'Planning';
?>
<section class="page_title translucent_bg_pink t_align_c">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">Projects</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/" class="color_grey_light_3 d_inline_m m_right_10">Home</a><i
                    class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i></li>
            <li class="m_right_8 f_xs_none"><a href="/scientific_studies"
                                               class="color_grey_light_3 d_inline_m m_right_10">Scientific Studies</a><i
                    class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i></li>
            <li class="f_xs_none"><a href="/scientific_studies/projects"
                                     class="color_grey_light_3 d_inline_m">Projects</a></li>
        </ul>
    </div>
</section>
<section class="section_offset">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9">
                @foreach($project as $p)
                <h3 class="fw_light page-header color_dark" id="project-detail-{{$p->id}}">{{$p->proje}}</h3>

                <div>
                    {!!$p->aciklama!!}
                </div>
                <div>
                    {!!$p->ekip!!}
                </div>
                @endforeach
            </div>
            <div class="col-md-3 col-lg-3">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th colspan="2">Project Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th class="bg_light_2">Project Code</th>
                        <td>{{$p->kod}}</td>
                    </tr>
                    <tr>
                        <th class="bg_light_2">Status</th>
                        <td>{{$status[$p->tur]}}</td>
                    </tr>
                    <tr>
                        <th class="bg_light_2">Budget</th>
                        <td>{{$p->butce}} {{$p->para_birimi}}</td>
                    </tr>
                    <tr>
                        <th class="bg_light_2">Date Start</th>
                        <td>{{date('d/m/Y', strtotime($p->tarih))}}</td>
                    </tr>
                    <tr>
                        <th class="bg_light_2">Date Finish</th>
                        <td>{{date('d/m/Y', strtotime($p->bitis_tarihi))}}</td>
                    </tr>
                    <tr>
                        <th class="bg_light_2">Duration</th>
                        <td>
                            {{$p->sure}}
                            @if($p->ek_sure)
                            <i class="icon-plus"></i> {{$p->ek_sure}}
                            @endif
                            months
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>
@stop



