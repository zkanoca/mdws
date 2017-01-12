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
        <div class="container">
            <div class="row">
                <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                    @if(count($contents) == 0)
                        <h3 class="fw_light"> {{trans('psychology.content_not_found_for', ['category' =>
                    trans('psychology.'.$cat)])}}</h3>
                @else

                    @foreach($contents as $c)

                        <!--post-->
                            <article class="clearfix m_bottom_50 m_xs_bottom_30 blog_post">
                                <!--date,category,likes-->
                                <div class="blog_side_container w_sm_auto f_left f_xs_none m_xs_bottom_5">
                                    <!--date-->
                                    <a href="#"
                                       class="d_block d_xs_inline_b m_xs_right_5 blog_side_button r_corners bg_color_green color_light not_hover t_align_c blog_date m_bottom_5">
                                        <span class="d_block day_of_the_month fw_light">{{date('j', strtotime($c->tarih))}}</span>
                                        <span class="d_block tt_uppercase fs_medium">{{trans('calendar.s'.date('M', strtotime($c->tarih)))}}</span>
                                    </a>
                                    <!--category-->
                                    <a href="/{{App::getLocale()}}/psychology"
                                       class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c color_green bg_color_green_hover color_light_hover bg_light_3 r_corners m_bottom_5 tr_all">
                                        <i class="icon-level-up-1 d_inline_m"></i>
                                    </a>
                                </div>
                                <!--post content-->
                                <figure>
                                    <a href="/{{App::getLocale()}}/psychology/{{$c->category_slug}}/{{$c->content_slug}}"
                                       class="d_block wrapper r_corners m_bottom_20">
                                        @if(file_exists('/images/psychology/{{$c->content_slug}}/{{$c->resim}}'))
                                            <img src="/images/psychology/{{$c->content_slug}}/{{$c->resim}}"
                                                 alt="{{$c->content_slug}}">
                                        @else
                                            <img src="/images/psychology/default.jpg" alt="{{$c->content_slug}}">
                                        @endif
                                    </a>
                                    <figcaption>
                                        <h3 class="fw_light">
                                            <a href="/{{App::getLocale()}}/psychology/{{$c->category_slug}}/{{$c->content_slug}}"
                                               class="color_dark tr_all">{{$c->baslik}}</a>
                                        </h3>
                                        <ul class="dotted_list m_bottom_5 color_grey_light_2">
                                            <li class="m_right_15 relative d_inline_m">
                                                <a href="#" class="color_grey fs_small">
                                                    <i>{{$c->yazar}}</i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="fw_light m_bottom_12">
                                            {!! $c->icerik !!}
                                        </div>
                                        <a href="/{{App::getLocale()}}/psychology/{{$c->category_slug}}/{{$c->content_slug}}"
                                           class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
											<span
                                                    class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
												<i class="icon-angle-right"></i>
											</span>
                                            {{trans('psychology.read_more')}}
                                        </a>
                                    </figcaption>
                                </figure>
                            </article>
                @endforeach
                @endif
            </div>
            <div class="col-lg-4 col-md-4"></div>

        </div>
    </section>


    <section>
        <div class="container clearfix">
            <div class="row">
            @foreach($contents as $c)
                <!--image-->
                    <div class="col-lg-8 col-md-8 col-sm-8 m_xs_bottom_30 m_bottom_50">
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
                                <a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--description-->
                    <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30 m_bottom_50 m_top_5">
                        <h3 class="fw_light"><a href="/{{App::getLocale()}}/psychology/{{$c->category_slug}}"
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
                                    <i><span class="fw_light">{{date('j', strtotime($c->tarih))}} {{trans('calendar.s'.date('M', strtotime($c->tarih)))}}</span></i></a>
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
                @endforeach
            </div>
        </div>
    </section>


@stop

