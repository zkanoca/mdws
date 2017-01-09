@extends('master')

@section('page_title')
Trainings
@stop

@section('nav_services_current')
current
@stop

@section('nav_trainings_current')
current
@stop


@section('content')
<section class="page_title translucent_bg_orange t_align_c">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">Trainings</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/" class="color_grey_light_3 d_inline_m m_right_10">Home</a>
                <i class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i>
            </li>
            <li class="m_right_8 f_xs_none"><a href="/services"
                                               class="color_grey_light_3 d_inline_m m_right_10">Services</a>
            </li>
        </ul>
    </div>
</section>
<section class="section_offset">
    <div class="container">
        <section class="blog_isotope_container three_columns m_bottom_35 m_xs_bottom_15"
                 data-isotope-options='{"itemSelector" : ".blog_isotope_item","layoutMode" : "masonry","transitionDuration":"0.7s","masonry" : {"columnWidth":".blog_isotope_item"}}'>
            @foreach($serviceContents as $sc)
            <div class="blog_isotope_item">
                <!--post-->
                <article class="r_corners border_grey">
                    <!--post content-->
                    <figure>
                        <a href="/services/trainings/{{$sc->content_slug}}"
                           class="d_block wrapper r_corners m_bottom_20">
                            @if(file_exists('/images/services/trainings/{{$sc->resim}}'))
                            <img src="/images/services/trainings/{{$sc->resim}}" alt="{{$sc->baslik}}">
                            @else
                            <img src="/images/services/default.jpg" alt="{{$sc->baslik}}">
                            @endif
                        </a>
                        <figcaption>
                            <h4 class="fw_light m_bottom_5 fs_middle"><a
                                    href="/services/trainings/{{$sc->content_slug}}"
                                    class="color_dark color_orange_hover tr_all">{{$sc->baslik}}</a></h4>
                            <ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
                                <?php /*
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_grey_light_2 fs_small">
                                        <i class="icon-picture-1"></i>
                                    </a>
                                </li>
                                */
                                ?>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_grey fs_small">
                                        <i>{{date('j M Y', strtotime($sc->tarih))}}</i>
                                    </a>
                                </li>
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_grey fs_small">
                                        <i>{{$sc->yazar}}</i>
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
                                <li class="m_right_15 relative d_inline_m">
                                    <a href="#" class="color_red_hover">
                                        <i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i
                                            class="fs_medium color_grey tr_all">176</i>
                                    </a>
                                </li>
                                */
                                ?>
                            </ul>
                            <?php /*
                            <a href="/services/trainings/{{$sc->content_slug}}"
                               class="color_orange d_inline_b color_orange_hover d_block m_right_20 fw_light">
											<span
                                                class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
												<i class="icon-angle-right"></i>
											</span>
                                Read More
                            </a>
                            */
                            ?>
                        </figcaption>
                    </figure>
                </article>
            </div>
            @endforeach


        </section>
    </div>
    <?php /*div class="t_align_c">
        <button id="load_more"
                class="button_type_2 color_dark r_corners transparent fs_medium bg_color_purple_hover tr_all">Load More
        </button>
    </div */
    ?>
</section>


@stop