@extends('master')

@section('page_title')
@foreach($publicStudy as $ps)
{{$ps->baslik}}
@endforeach
@stop

@section('nav_scientific_studies_current')
current
@stop

@section('nav_public_studies_current')
current
@stop

@php
setlocale(LC_ALL, 'tr_TR.utf8');
@endphp

@section('content')

<section class="page_title translucent_bg_purple t_align_c">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">@foreach($publicStudy as $ps)
            {{$ps->baslik}}
            @endforeach</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/" class="color_grey_light_3 d_inline_m m_right_10">Home</a>
                <i class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i>
            </li>
            <li class="m_right_8 f_xs_none"><a href="/scientific-studies"
                                               class="color_grey_light_3 d_inline_m m_right_10">Scientific Studies</a>
                <i class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i>
            </li>
            <li class="m_right_8 f_xs_none"><a href="/scientific-studies/public-studies"
                                               class="color_grey_light_3 d_inline_m m_right_10">Public Studies</a>

            </li>

        </ul>
    </div>
</section>
<section class="section_offset">

    <div class="container">
        <div class="row">
            <aside class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">

                <div class="tabs m_bottom_50 m_xs_bottom_30" data-easytabs="true">
                    <!--tabs nav-->
                    <h5 class="fw_light page-header">Other Public Studies</h5>

                    <div class="list-group">
                        @foreach($publicStudies as $pss)
                        <a class="list-group-item" href="{{$pss->slug}}">
                            <h5 class="  fw_light list-group-item-heading">{{$pss->baslik}}</h5>

                            <p class="fw_light list-group-item-text">{{$pss->category}}</p>
                        </a>
                        @endforeach
                    </div>


                </div>

            </aside>
            <section class="col-lg-9 col-md-9 col-sm-9">
                <!--post-->
                @foreach($publicStudy as $ps)
                <article class="clearfix m_bottom_45 m_xs_bottom_30 blog_post">
                    <!--date,category,likes-->
                    <div class="blog_side_container w_sm_auto f_left f_xs_none m_xs_bottom_5">
                        <!--date-->
                        <a href="#"
                           class="d_block d_xs_inline_b m_xs_right_5 blog_side_button r_corners bg_color_purple color_light not_hover t_align_c blog_date m_bottom_5">
                            <span class="d_block day_of_the_month fw_light">{{date('d', strtotime($ps->tarih))}}</span>
                            <span class="d_block tt_uppercase fs_medium">{{date('M', strtotime($ps->tarih))}}</span>
                        </a>
                        <!--category-->
                        <a href="#"
                           class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c color_purple bg_color_purple_hover color_light_hover bg_light_3 r_corners m_bottom_5 tr_all">
                            <i class="icon-folder d_inline_m"></i> {{$ps->kategori}}
                        </a>
                    </div>
                    <!--post content-->
                    <figure>
                        <div class="m_bottom_20 r_corners wrapper simple_slideshow relative" style="height: 432px;">
                            <ul class="slides">
                                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: block; z-index: 2; opacity: 1;"
                                    class="flex-active-slide"><img src="images/blog_img_4.jpg" alt="" draggable="false">
                                </li>
                                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: block; z-index: 1; opacity: 0;"
                                    class=""><img src="images/blog_img_5.jpg" alt="" draggable="false"></li>
                                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: block; z-index: 1; opacity: 0;"
                                    class=""><img src="images/blog_img_6.jpg" alt="" draggable="false"></li>
                            </ul>
                            <ul class="flex-direction-nav">
                                <li><a class="flex-prev color_light icon icon_wrap_size_3 circle tr_all" href="#"></a>
                                </li>
                                <li><a class="flex-next color_light icon icon_wrap_size_3 circle tr_all" href="#"></a>
                                </li>
                            </ul>
                        </div>
                        <figcaption>
                            <h3 class="fw_light color_dark">{{$ps->baslik}}</h3>
                            <ul class="dotted_list m_bottom_5 color_grey_light_2">
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_grey fs_small">
                                        <i>{{$ps->yazar}}</i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="fs_medium color_grey"><i>{{$ps->kategori}}</i></a>
                                </li>

                            </ul>
                            <div class="fw_light m_bottom_12">{!!$ps->icerik!!}</div>


                        </figcaption>
                    </figure>
                </article>


                <hr class="m_bottom_15">
                @endforeach


            </section>
        </div>
    </div>

</section>
@stop