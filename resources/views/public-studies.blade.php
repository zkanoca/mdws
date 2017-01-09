@extends('master')

@section('page_title')
Public Studies
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
        <h1 class="color_light fw_light m_bottom_5">Public Studies</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/" class="color_grey_light_3 d_inline_m m_right_10">Home</a>
                <i class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i>
            </li>
            <li class="m_right_8 f_xs_none"><a href="/scientific-studies"
                                               class="color_grey_light_3 d_inline_m m_right_10">Scientific Studies</a>
            </li>

        </ul>
    </div>
</section>
<section class="section_offset">
    <div class="container clearfix">
        <section class="t_align_c">
            <!--sort-->
            <div class="sort fs_medium hr_list d_inline_b d_xs_block m_bottom_15 btn-group" role="group">
                <button type="button" data-filter="*" class="btn btn-default">All</button>
                @foreach($publicStudyCategories as $psc)
                <button type="button" href="#" data-filter=".filter-{{$psc->code}}" class="btn btn-default">
                    {{$psc->category}}
                </button>

                @endforeach
            </div>
        </section>
        <section
            class="portfolio_isotope_container two_columns without_text masonry m_xs_bottom_15 m_bottom_35" <?php echo $fix; ?>
            style="position: relative; height: 1026px;">
            @foreach($publicStudies as $ps)
            <figure id="public-study-{{$ps->id}}" class="portfolio_item filter-{{$ps->code}}"
                    style="position: absolute; left: 0px; top: 0px;">
                <!--image & description-->
                <div class="popup_wrap db_xs_centered relative r_corners wrapper db_xs_centered" style="width: auto;">
                    <img src="/images/public_studies/{{$ps->resim}}" alt="">

                    <div class="project_description vc_child t_align_c tr_all_long">
                        <div class="d_inline_m">
                            <h4 class="lh_inherit"><a href="/scientific-studies/public-studies/{{$ps->slug}}"
                                                      class="color_light tr_all not_hover">{{$ps->baslik}}</a>
                            </h4>
                            <!--project's info-->
                            <ul class="dotted_list m_bottom_5 color_light">

                                <li class="m_right_15 relative d_inline_m category">
                                    <a href="#" class="fs_medium color_light not_hover">
                                        <i>{{$ps->category}}</i></a>
                                </li>

                            </ul>
                            <div class="d_inline_b clearfix">
                                <a href="/images/public_studies/{{$ps->resim}}" data-group="portfolio"
                                   data-title="{{$ps->baslik}}"
                                   class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
                                    <i class="icon-plus"></i>
                                </a>
                                <a href="/scientific-studies/public-studies/{{$ps->slug}}"
                                   class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </figure>
            @endforeach

        </section>

    </div>

</section>


@stop