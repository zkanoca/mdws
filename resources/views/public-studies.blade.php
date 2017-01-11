@extends('master')

@section('page_title')
{{trans('nav.public_studies')}}
@stop

@section('nav_scientific_studies_current')
current
@stop

@section('nav_public_studies_current')
current
@stop

<?php
$fix = 'data-isotope-options="{&quot;itemSelector&quot; : &quot;.portfolio_item&quot;,&quot;layoutMode&quot; : &quot;masonry&quot;,&quot;transitionDuration&quot;:&quot;0.7s&quot;,&quot;masonry&quot; : {&quot;columnWidth&quot;:&quot;.portfolio_item&quot;}}"';


?>
@section('content')
<section class="page_title translucent_bg_purple t_align_c">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">{{trans('nav.public_studies')}}</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/{{App::getLocale()}}"
                                               class="color_grey_light_3 d_inline_m m_right_10">{{trans('nav.home')}}</a>
                <i class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i>
            </li>
            <li class="m_right_8 f_xs_none"><a href="/{{App::getLocale()}}/scientific-studies"
                                               class="color_grey_light_3 d_inline_m m_right_10">{{trans('nav.scientific_studies')}}</a>
            </li>

        </ul>
    </div>
</section>
<section class="section_offset">
    <div class="container clearfix">
        <section class="t_align_c">
            <!--sort-->
            <div class="sort fs_medium hr_list d_inline_b d_xs_block m_bottom_15 btn-group" role="group">
                <button type="button" data-filter="*" class="btn btn-default"><i class="fa fa-asterisk"></i> <br>
                    {{trans('public_studies.all')}}
                </button>
                @foreach($publicStudyCategories as $psc)
                <button type="button" href="#" data-filter=".filter-{{$psc->code}}" class="btn btn-default">
                    <i class="{{$psc->icon}}"></i> &nbsp; <br>{{trans('public_studies.'.$psc->category)}}
                </button>

                @endforeach
            </div>
        </section>
        <section
            class="portfolio_isotope_container three_columns without_text masonry m_xs_bottom_15 m_bottom_35" <?php echo $fix; ?>
            style="position: relative; height: 1026px;">
            @foreach($publicStudies as $ps)
            <figure id="public-study-{{$ps->id}}" class="portfolio_item filter-{{$ps->code}}"
                    style="position: absolute; left: 0px; top: 0px;">

                <div class="popup_wrap db_xs_centered relative r_corners wrapper db_xs_centered" style="width: auto;">

                    <?php
                    $resim = '/images/public_studies/default.jpg';

                    if (file_exists('/images/public_studies/' . $ps->slug . '/' . $ps->resim)) {
                        $resim = '/images/public_studies/' . $ps->slug . '/' . $ps->resim;
                    }
                    ?>


                    <img src="{{$resim}}" alt="">

                    <div class="project_description vc_child t_align_c tr_all_long">
                        <div class="d_inline_m">
                            <h4 class="lh_inherit"><i class="color_light {{$ps->icon}}"></i> <a
                                    href="/{{App::getLocale()}}/scientific-studies/public-studies/{{$ps->slug}}"
                                    class="color_light tr_all not_hover">{{$ps->baslik}}</a>
                            </h4>
                            <ul class="dotted_list m_bottom_5 color_light">

                                <li class="m_right_15 relative d_inline_m category">
                                    <!--a href="#" data-filter=".filter-{{$psc->code}} class=" fs_medium color_light
                                       not_hover"-->
                                    <i>{{trans('public_studies.'.$ps->category)}}</i>
                                    <!--/a-->
                                </li>
                            </ul>
                            <div class="d_inline_b clearfix">
                                <a href="{{$resim}}" data-group="portfolio"
                                   data-title="{{$ps->baslik}}"
                                   class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
                                    <i class="icon-plus"></i>
                                </a>
                                <a href="/{{App::getLocale()}}/scientific-studies/public-studies/{{$ps->slug}}"
                                   class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="m_bottom_20 m_top_20" id="category-{{$ps->kategoriid}}    ">
                    <i class="{{$ps->icon}}"></i> &nbsp;
                    <a href="/{{App::getLocale()}}/scientific-studies/public-studies/{{$ps->slug}}">
                        {{$ps->baslik}}
                    </a>
                </h5>
            </figure>


            @endforeach
        </section>
    </div>
</section>
@stop