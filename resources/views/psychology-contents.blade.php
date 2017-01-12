<?php
$cat = '';
$id = 0;
foreach ($category as $c):
    $cat = $c->category;
    $id = $c->id;
endforeach;


?>
@extends('master')

@section('page_title')

    {{trans('nav.psychology')}} - {{trans('psychology.'.$cat)}}

@stop

@section('nav_psychology_current')
current
@stop

@section('content')

<section class="page_title translucent_bg_green t_align_c">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">
            {{trans('psychology.' . $cat)}}
        </h1>
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none">
                <a href="/{{App::getLocale()}}/" class="color_grey_light_3 d_inline_m m_right_10">
                    {{trans('nav.home')}}
                </a>
                <i class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i>
            </li>
            <li class="m_right_8 f_xs_none">
                <a href="/{{App::getLocale()}}/psychology" class="color_grey_light_3 d_inline_m m_right_10">
                    {{trans('nav.psychology')}}
                </a>
            </li>
        </ul>
    </div>
</section>
<section class="section_offset">

    @foreach($contents as $c)
        <div class="container clearfix">
            <div class="row">
                <!--image-->
                <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30 m_bottom_50">
                    <div class="popup_wrap relative r_corners wrapper db_xs_centered" style="width: auto;">
                        <?php
                        $resim = '/images/psychology/default.jpg';
                        if (file_exists('/images/psychology/{{$c->content_slug}}/{{$c->resim}}')) {
                            $resim = '/images/psychology/{{$c->content_slug}}/{{$c->resim}}';
                        }
                        ?>
                        <img src="{{$resim}}" alt="{{$c->content_slug}}">

                        <div class="popup_buttons tr_all_long">
                            <a href="{{$resim}}" data-group="portfolio" data-title="Title 1"
                               class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
                                <i class="icon-plus"></i>
                        </a>
                            <a href="/{{App::getLocale()}}/psychology/{{$c->category_slug}}/{{$c->content_slug}}"
                               class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
                                <i class="icon-link"></i>
                        </a>
                    </div>
                    </div>
                </div>
                <!--description-->
                <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30 m_bottom_50 m_top_5">
                    <h3 class="fw_light lh_medium"><a
                                href="/{{App::getLocale()}}/psychology/{{$c->category_slug}}/{{$c->content_slug}}"
                                class="color_dark tr_all">{{$c->baslik}}</a></h3>
                    <!--project's info-->
                    <ul class="dotted_list m_bottom_5 color_grey_light_2">
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="color_grey_light_2 fs_small">
                                <i class="{{$c->icon}}"></i>
                            </a>
                        </li>
                        <li class="m_right_15 relative d_inline_m">
                            <a href="/{{App::getLocale()}}/psychology/{{$c->category_slug}}"
                               class="fs_medium color_grey">
                                <i>{{trans('psychology.' . $c->category)}}</i></a>
                        </li>
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="fs_medium color_grey">
                                <i>
                                <span class="fw_light">
                                    {{date('j', strtotime($c->tarih))}}
                                    {{trans('calendar.s'.date('M', strtotime($c->tarih)))}}
                                </span>
                                </i>
                            </a>
                        </li>
                        <?php /*
                    <li class="m_right_15 relative d_inline_m">
                        <a href="#" class="color_red_hover">
                            <i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
                        </a>
                    </li>
                        */
                        ?>
                    </ul>
                    <p class="m_bottom_12 fw_light"></p>

                    <div class="clearfix">
                        <a href="#" class="color_purple color_pink_hover f_left d_block m_right_20 fw_light">
									<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
										<i class="icon-angle-right"></i>
									</span>
                            {{trans('psychology.read_more')}}
                        </a>
                        <?php /*
                    <a href="#" class="color_purple color_pink_hover f_left d_block fw_light">
									<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
										<i class="icon-link"></i>
									</span>
                        View Project
                    </a>
                    */
                        ?>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
</section>


@stop

