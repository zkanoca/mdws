@extends('master')


@section('page_title')
Scientific Studies
@stop

@section('nav_scientific_studies_current')
current
@stop

@section('content')
<section class="page_title translucent_bg_color_dark image_fixed t_align_c relative wrapper">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">Scientific Studies</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/"
                                               class="color_grey_light_3 d_inline_m m_right_10">Home</a><i
                    class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i></li>
            <li><a class="color_grey_light_3 d_inline_m">Scientific Studies</a></li>
        </ul>
    </div>
</section>
<section class="section_offset">


    <main class="container t_align_c">
        <h3 class="color_dark fw_light m_bottom_15 heading_1">Scientific Studies</h3>

        <p class="m_bottom_35 heading_2">You can see what we publish and study in these pages.</p>

        <div class="row t_align_c">
            <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
                <figure>
                    <div
                        class="icon_wrap_size_6 circle color_purple d_inline_m animation_fill type_2 relative m_bottom_20">
                        <i class="icon-doc-text-1 tr_all"></i>
                    </div>
                    <figcaption>
                        <h5 class="color_dark m_bottom_15"><a class="color_purple"
                                                              href="/scientific-studies/publications">Publications</a>
                        </h5>

                        <p class="m_bottom_23">All the articles, books, chapters, and other academic publications are
                            listed here</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
                <figure>
                    <div
                        class="icon_wrap_size_6 circle color_pink d_inline_m animation_fill type_2 relative m_bottom_20">
                        <i class="icon-infinity tr_all"></i>
                    </div>
                    <figcaption>
                        <h5 class="color_dark m_bottom_15"><a class="color_pink" href="/scientific-studies/projects">Projects</a>
                        </h5>

                        <p class="m_bottom_23">We work really hard.</p>
                        <?php /*a href="#"
                           class="button_type_2 color_dark r_corners fs_medium color_pink_hover tr_all d_inline_b">Read
                            More</a*/
                        ?>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
                <figure>
                    <div
                        class="icon_wrap_size_6 circle color_purple d_inline_m animation_fill type_2 relative m_bottom_20">
                        <i class="icon-newspaper tr_all"></i>
                    </div>
                    <figcaption>
                        <h5 class="color_dark m_bottom_15"><a class="color_purple"
                                                              href="/scientific-studies/public-studies">Public
                                Studies</a></h5>

                        <p class="m_bottom_23">All the public activities on TV, press and etc.</p>
                        <?php /*a href="#"
                           class="button_type_2 color_dark r_corners fs_medium color_purple_hover tr_all d_inline_b">Read
                            More</a */
                        ?>
                    </figcaption>
                </figure>
            </div>
        </div>
    </main>


</section>
@stop