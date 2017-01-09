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
                            @if($n->resim != '' && !file_exists('/images/news/{{$n->resimler}}/{{$n->resim}}'))
                            <img src="/images/news/{{$n->resimler}}/{{$n->resim}}" alt="{{$n->baslik}}"
                                 draggable="false">
                            @else
                            <img src="/images/about_img_1.jpg" alt="Temsili Resim" draggable="false">
                            @endif

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
                                <h3 class="color_dark fw_light m_bottom_12"><a href="/news/{{$n->slug}}"
                                                                               class="color_dark color_dark_hover">{{$n->baslik}}</a>
                                </h3>

                                <div class="m_bottom_12 fs_medium">{{substr(strip_tags($n->icerik),0,
                                    strpos(strip_tags($n->icerik), '.')+1)}}
                                </div>
                                <a href="/news/{{$n->slug}}"
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
                                @if($n->resim != '' && !file_exists('/images/news/{{$n->resimler}}/{{$n->resim}}'))
                                <img src="/images/news/{{$n->resimler}}/{{$n->resim}}" alt="{{$n->baslik}}"
                                     style="width:80px;height:80px;clip:rect(40px,40px,40px,40px);">
                                @else
                                <img src="/images/favicon.png" alt="Temsili Resim">
                                @endif

                            </div>
                            <p class="color_dark d_block lh_medium m_bottom_5 tr_all fw_light">
                                <strong>
                                    @if(strlen($n->baslik) > 50)
                                    {{substr($n->baslik,0,50)}}...
                                    @else
                                    {{$n->baslik}}
                                    @endif
                                </strong>
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
<section class="section_offset_3 bg_light_2 relative">
    <div class="container">
        <div class="row">
            <h3 class="fw_light">Trainings</h3>

            <div class="owl-carousel"
                 data-plugin-options='{"itemsCustom": [[992,4],[768,3],[450,1],[10,1]],"autoPlay":true,"singleItem" : false}'
                 data-nav="lp_nav_">

                @foreach($trainings as $t)
                <figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown"
                        data-appear-animation-delay="1400">
                    <!--image-->
                    <div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b">
                        <img src="/images/trainings/{{$t->resim}}" alt="{{$t->baslik}}">

                        <div class="popup_buttons tr_all_long w_md_full t_md_align_c">
                            <a href="/images/trainings/{{$t->resim}}" data-group="latest_news"
                               data-title="{{$t->baslik}}"
                               class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
                                <i class="icon-plus"></i>
                            </a>
                            <a href="/services/trainings/{{$t->slug}}"
                               class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
                                <i class="icon-link"></i>
                            </a>
                        </div>
                    </div>
                    <!--description-->
                    <figcaption>
                        <h6 class="lh_large m_bottom_3"><a href="/services/trainings/{{$t->slug}}"
                                                           class="color_dark tr_all">{{$t->baslik}}</a></h6>
                        <!--project's info-->
                        <ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
                            <!--li class="m_right_15 relative d_inline_m">
                                <a href="#" class="color_grey_light_2 fs_small">
                                    <i class="icon-picture"></i>
                                </a>
                            </li-->
                            <li class="m_right_15 relative d_inline_m">
                                <a href="#" class="color_grey fs_small">
                                    <i>{{date('j M', strtotime($t->tarih))}}</i>
                                </a>
                            </li>

                        </ul>
                    </figcaption>
                </figure>
                @endforeach
            </div>
        </div>
    </div>
    <!--carousel nav-->
    <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover lp_nav_prev d_md_none"
            data-appear-animation="fadeIn">
        <i class="icon-left-open-big"></i>
    </button>
    <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover lp_nav_next d_md_none"
            data-appear-animation="fadeIn">
        <i class="icon-right-open-big"></i>
    </button>
</section>

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<script>
    $(function ($) {
        $('#atiflar').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Citations to My Publications'
            },
            xAxis: {
                categories: [<?php echo Helper::yillar($citationCounts)?>]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Count'
                }
            },
            legend: {
                itemStyle: {
                    font: '9px Arial, Helvetica, sans-serif'
                },
                layout: 'horizontal',
                align: 'left',
                verticalAlign: 'bottom',
                borderWidth: 0
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
            series: [
                {
                    name: 'On SSCI/SCI Indexes (By others)',
                    data: [<?php echo Helper::sutun($citationCounts, 1);?>]
                },
                {
                    name: 'On SSCI/SCI Indexes (By myself)',
                    data: [<?php echo Helper::sutun($citationCounts,2);?>]
                },
                {
                    name: 'In Journals on Other Indexes (ProQuest, PsycINFO, PsycLIT, SCOPUS etc.)',
                    data: [<?php echo Helper::sutun($citationCounts,3);?>]
                },
                {
                    name: 'In Other Journals and Thesis',
                    data: [<?php echo Helper::sutun($citationCounts,4);?>]
                }
            ]
        });


        $('#yayinlar').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Publications'
            },
            xAxis: {

                categories: [<?php echo Helper::yillar($publicationCounts)?>]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Count'
                }
            },
            legend: {
                itemStyle: {
                    font: '9px Arial, Helvetica, sans-serif'
                },
                layout: 'horizontal',
                align: 'left',
                verticalAlign: 'bottom',
                borderWidth: 0
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
            series: [
                {
                    name: 'A. The articles published in journals appear in Thomson Reuters indexes (SCI, SSCI, AHCI)',

                    data: [<?php echo Helper::sutun($publicationCounts, 1)?>]
                },
                {
                    name: 'B. The articles published in journals appear in other indexes (e.g., ProQuest, PsycINFO, PsycLIT, SCOPUS)',
                    data: [<?php echo Helper::sutun($publicationCounts, 2)?>]

                },
                {
                    name: 'C. Papers presented at international scientific conventions',
                    data: [<?php echo Helper::sutun($publicationCounts, 3)?>]

                },
                {
                    name: 'D. Books and book chapters published nationally/internationally',
                    data: [<?php echo Helper::sutun($publicationCounts, 4)?>]

                },
                {
                    name: 'E. Papers presented at national scientific conventions',
                    data: [<?php echo Helper::sutun($publicationCounts, 5)?>]

                },
                {
                    name: 'F. Papers presented at national scientific conventions',
                    data: [<?php echo Helper::sutun($publicationCounts, 6)?>]

                },
                {
                    name: 'G. Other Publications',
                    data: [<?php echo Helper::sutun($publicationCounts, 7)?>]

                },
                {
                    name: 'H. Thesis',
                    data: [<?php echo Helper::sutun($publicationCounts, 8)?>]

                }
            ]
        });
    });
</script>
<section class="section_offset_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">

                <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">Publications</h3>

                <div id="yayinlar">
                </div>

            </div>
            <div class="col-lg-6 col-md-6">

                <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">Citations to My Publications</h3>

                <div id="atiflar">
                </div>

            </div>
        </div>
    </div>
</section>

@stop