<?php
$cat = '';
$id = 0;
foreach ($serviceCategory as $c):
    $cat = $c->category;
    $id = $c->id;
endforeach;


?>
@extends('master')

@section('page_title')

Services - {{$cat}}

@stop

@section('nav_services_current')
current
@stop

@section('content')

<section class="page_title translucent_bg_orange t_align_c">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">

            {{$cat}}

        </h1>
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/" class="color_grey_light_3 d_inline_m m_right_10">Home</a>
                <i class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i>
            </li>
            <li class="m_right_8 f_xs_none"><a href="/services" class="color_grey_light_3 d_inline_m m_right_10">Services</a>
            </li>
        </ul>
    </div>


</section>
<section class="section_offset">
    <div class="container">
        <div class="row">

            <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                @if(count($serviceContents) == 0)
                <h3 class="fw_light">No Content Found for {{ $cat }}</h3>
                @else

                @foreach($serviceContents as $c)

                <!--post-->
                <article class="clearfix m_bottom_50 m_xs_bottom_30 blog_post">
                    <!--date,category,likes-->
                    <div class="blog_side_container w_sm_auto f_left f_xs_none m_xs_bottom_5">
                        <!--date-->
                        <a href="#"
                           class="d_block d_xs_inline_b m_xs_right_5 blog_side_button r_corners bg_color_orange color_light not_hover t_align_c blog_date m_bottom_5">
                            <span class="d_block day_of_the_month fw_light">{{date('j', strtotime($c->tarih))}}</span>
                            <span class="d_block tt_uppercase fs_medium">{{date('M', strtotime($c->tarih))}}</span>
                        </a>
                        <!--category-->
                        <a href="/services"
                           class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c color_orange bg_color_orange_hover color_light_hover bg_light_3 r_corners m_bottom_5 tr_all">
                            <i class="icon-level-up d_inline_m"></i>
                        </a>
                    </div>
                    <!--post content-->
                    <figure>
                        <a href="/services/{{$c->category_slug}}/{{$c->content_slug}}"
                           class="d_block wrapper r_corners m_bottom_20">
                            @if(file_exists('/images/services/{{$c->content_slug}}/{{$c->resim}}'))
                            <img src="/images/services/{{$c->content_slug}}/{{$c->resim}}" alt="{{$c->content_slug}}">
                            @else
                            <img src="/images/services/default.jpg" alt="{{$c->content_slug}}">
                            @endif
                        </a>
                        <figcaption>
                            <h3 class="fw_light">
                                <a href="/services/{{$c->category_slug}}/{{$c->content_slug}}"
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
                            <a href="/services/{{$c->category_slug}}/{{$c->content_slug}}"
                               class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
											<span
                                                class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
												<i class="icon-angle-right"></i>
											</span>
                                Read More
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


</section>


@stop

