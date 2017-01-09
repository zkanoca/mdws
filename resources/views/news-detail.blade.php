<?php
$baslik = '';

foreach ($news as $n):
    $baslik = $n->baslik;
endforeach;


?>
@extends('master')

@section('page_title')
{{$baslik}}
@stop

@section('nav_home_current')
current
@stop

@php
setlocale(LC_ALL, 'tr_TR.utf8');
@endphp
@section('content')

<section class="page_title translucent_bg_purple t_align_c">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">{{$baslik}}</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/" class="color_grey_light_3 d_inline_m m_right_10">Home</a>
                <i class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i>
            </li>
            <li class="m_right_8 f_xs_none"><a href="/news" class="color_grey_light_3 d_inline_m m_right_10">News</a>
            </li>
        </ul>
    </div>
</section>
<section class="section_offset">
    <div class="container">
        <!--post-->
        <article class="clearfix m_bottom_45 m_xs_bottom_30 blog_post">
            <!--date,category,likes-->
            <div class="blog_side_container w_sm_auto f_left f_xs_none m_xs_bottom_5">
                <!--date-->
                <a href="#"
                   class="d_block d_xs_inline_b m_xs_right_5 blog_side_button r_corners bg_color_purple color_light not_hover t_align_c blog_date m_bottom_5">
                    <span class="d_block day_of_the_month fw_light">{{date('d', strtotime($n->tarih))}}</span>
                    <span class="d_block tt_uppercase fs_medium">{{date('M', strtotime($n->tarih))}}</span>
                </a>
                <?php /*
                <!--category-->
                <a href="#"
                   class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c color_purple bg_color_purple_hover color_light_hover bg_light_3 r_corners m_bottom_5 tr_all">
                    <i class="icon-picture-1 d_inline_m"></i>
                </a>
                <!--likes-->
                <a href="#"
                   class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c border_grey r_corners tr_all color_grey color_red_hover">
								<span class="d_inline_m">
									<span class="d_block"><i
                                            class="icon-heart-empty color_grey_light_2 tr_all d_block m_top_5"></i></span>
									<i class="fs_medium">176</i>
								</span>
                </a>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_floating_style addthis_counter_style">
                    <a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
                    <a class="addthis_button_tweet" tw:count="vertical"></a>
                    <a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
                    <a class="addthis_counter"></a>
                </div>
                */
                ?>
            </div>
            <!--post content-->
            <figure>
                @if($n->resimler != '')
                <?php
                $images = glob("images/news/" . $n->resimler . "/*.jpg");
                ?>
                @if(count($images) > 0)
                <div class="m_bottom_20 r_corners wrapper simple_slideshow relative">
                    <ul class="slides">
                        @foreach($images as $i)
                        <li><img src="/{{$i}}" alt="{{$n->baslik}}"></li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @elseif($n->resim = '')
                <img src="/images/kapak/{{$n->resim}}" alt="{{$n->baslik}}" class="r_corners m_bottom_20">
                @endif

                <figcaption>
                    <h3 class="fw_light color_dark">{{$n->baslik}}</h3>
                    <ul class="dotted_list m_bottom_5 color_grey_light_2">
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="color_grey fs_small">
                                <i>{{$n->yazar}}</i>
                            </a>
                        </li>
                        <?php /*
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="fs_medium color_grey"><i>Mobile</i></a>,
                            <a href="#" class="fs_medium color_grey"><i>Technology</i></a>
                        </li>
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="color_scheme_hover">
                                <i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i
                                    class="fs_medium color_grey tr_all">35</i>
                            </a>
                        </li>
                            */
                        ?>
                    </ul>
                    <div class="fw_light m_bottom_12">
                        {!!$n->icerik!!}
                    </div>

                    <?php /*
                    <!--tags-->
                    <i class="icon-tag-1 color_grey_light_2 d_inline_m m_right_5 fs_large tags_icon"></i>
                    <ul class="d_inline_m fw_light">
                        <li class="d_inline_m"><a href="#" class="color_purple"> </a>,</li>
                        <li class="d_inline_m"><a href="#" class="color_purple"> </a>,</li>
                        <li class="d_inline_m"><a href="#" class="color_purple"> </a></li>
                    </ul>
                    */
                    ?>
                </figcaption>
            </figure>
        </article>
    </div>
</section>

@stop