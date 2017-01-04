@extends('master')

@section('page_title')
Home
@stop

@section('nav_home_current')
current
@stop

@section('content')

<section class="section_offset_3">
    <div class="container">
        <!--slider-->
        <div class="wrapper">
            <div class="flex_container f_left f_md_none wrapper appear-animation fadeInLeft appear-animation-visible"
                 data-appear-animation="fadeInLeft" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                <div class="flexslider" style="height: 500px;">
                    <ul class="slides">
                        @foreach($news as $n)
                        <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: block; z-index: 2; opacity: 1;"
                            class="flex-active-slide">
                            <img src="images/flexslider_img_2.jpg" alt="" draggable="false">

                            <div class="fs_caption r_corners wrapper d_xs_none">
                                <header class="bg_light">
                                    <ul class="dotted_list color_grey_light_2 article_stats">
                                        <li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="color_grey_light_2 fs_small"><i class="icon-picture"></i></a>
                                        </li>
                                        <li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="fs_small color_grey"><i>{{$n->tarih}}</i></a>
                                        </li>
                                        <li class="relative d_inline_m">
                                            <a href="#" class="fs_small color_grey"><i>{{$n->kategori}}</i></a>
                                        </li>
                                    </ul>
                                </header>
                                <h3 class="color_dark fw_light m_bottom_12">{{$n->baslik}}</h3>

                                <div class="m_bottom_12 fs_medium">{{substr(strip_tags($n->icerik),0, 200)}}</div>
                                <a href="#"
                                   class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
                                    <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                        <i class="icon-angle-right"></i>
                                    </span>
                                    Read More
                                </a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <ul class="flex-direction-nav">
                        <li><a class="flex-prev color_light icon icon_wrap_size_3 circle tr_all" href="#"></a></li>
                        <li><a class="flex-next color_light icon icon_wrap_size_3 circle tr_all" href="#"></a></li>
                    </ul>
                </div>
            </div>
            <div
                class="thumbnails_container f_md_none f_right bg_light_2 md_wrapper appear-animation fadeInLeft appear-animation-visible"
                data-appear-animation="fadeInLeft" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                <ul>
                    @foreach($news as $n)
                    <li class="tr_all f_md_left t_md_align_c f_xs_none t_xs_align_l active">
                        <article class="clearfix">
                            <div
                                class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
                                <img src="images/thumbnails_img_1.jpg" alt="">
                            </div>
                            <p class="color_dark d_block lh_medium m_bottom_5 tr_all"><strong>{{$n->baslik}}</strong>
                            </p>
                            <ul class="dotted_list color_grey_light_2 article_stats">
                                <li class="m_right_15 relative d_inline_m">
                                    <span class="color_grey_light_2 fs_small"><i class="icon-picture"></i></span>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <span class="fs_small color_grey"><i>{{date('F d',strtotime($n->tarih))}}</i></span>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <span class="fs_small color_grey"><i>{{$n->kategori}}</i></span>
                                </li>
                            </ul>
                        </article>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@stop