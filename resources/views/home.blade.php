@extends('master')


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
            <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: block; z-index: 2; opacity: 1;"
                class="flex-active-slide">
                <img src="images/flexslider_img_2.jpg" alt="" draggable="false">

                <div class="fs_caption r_corners wrapper d_xs_none">
                    <header class="bg_light">
                        <ul class="dotted_list color_grey_light_2 article_stats">
                            <li class="m_right_15 relative d_inline_m">
                                <a href="#" class="color_grey_light_2 fs_small">
                                    <i class="icon-picture"></i>
                                </a>
                            </li>
                            <li class="m_right_15 relative d_inline_m">
                                <a href="#" class="fs_small color_grey">
                                    <i>June 26, 2013</i>
                                </a>
                            </li>
                            <li class="relative d_inline_m">
                                <a href="#" class="fs_small color_grey"><i>3D</i></a>,
                                <a href="#" class="fs_small color_grey"><i>Graphic Design</i></a>
                            </li>
                        </ul>
                    </header>
                    <h3 class="color_dark fw_light m_bottom_12">Think outside the box!</h3>

                    <p class="m_bottom_12 fs_medium">Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla.
                        Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae,
                        pede...</p>
                    <a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
												<span
                                                    class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
													<i class="icon-angle-right"></i>
												</span>
                        Read More
                    </a>
                </div>
            </li>
            <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                <img src="images/flexslider_img_1.jpg" alt="" draggable="false">

                <div class="fs_caption r_corners wrapper d_xs_none">
                    <header class="bg_light">
                        <ul class="dotted_list color_grey_light_2 article_stats">
                            <li class="m_right_15 relative d_inline_m">
                                <a href="#" class="color_grey_light_2 fs_small">
                                    <i class="icon-doc-text-inv"></i>
                                </a>
                            </li>
                            <li class="m_right_15 relative d_inline_m">
                                <a href="#" class="fs_small color_grey">
                                    <i>June 29, 2013</i>
                                </a>
                            </li>
                            <li class="relative d_inline_m">
                                <a href="#" class="fs_small color_grey"><i>Mobile</i></a>,
                                <a href="#" class="fs_small color_grey"><i>Technology</i></a>
                            </li>
                        </ul>
                    </header>
                    <h3 class="color_dark fw_light m_bottom_12">The best priced product!</h3>

                    <p class="m_bottom_12 fs_medium">Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci
                        luctus et ultrices posuere cubilia Curae. Suspendisse sollicitudin velit sed leo. Ut pharetra
                        augue nec...</p>
                    <a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
												<span
                                                    class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
													<i class="icon-angle-right"></i>
												</span>
                        Read More
                    </a>
                </div>
            </li>

            <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                <img src="images/flexslider_img_3.jpg" alt="" draggable="false">

                <div class="fs_caption r_corners wrapper d_xs_none">
                    <header class="bg_light">
                        <ul class="dotted_list color_grey_light_2 article_stats">
                            <li class="m_right_15 relative d_inline_m">
                                <a href="#" class="color_grey_light_2 fs_small">
                                    <i class="icon-link"></i>
                                </a>
                            </li>
                            <li class="m_right_15 relative d_inline_m">
                                <a href="#" class="fs_small color_grey">
                                    <i>May 9, 2013</i>
                                </a>
                            </li>
                            <li class="relative d_inline_m">
                                <a href="#" class="fs_small color_grey"><i>Process</i></a>,
                                <a href="#" class="fs_small color_grey"><i>Technology</i></a>
                            </li>
                        </ul>
                    </header>
                    <h3 class="color_dark fw_light m_bottom_12">Try The 30 Day Free Trial With All Features</h3>

                    <p class="m_bottom_12 fs_medium">Donec eget tellus non erat lacinia fermentum. Donec in velit vel
                        ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit...</p>
                    <a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
												<span
                                                    class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
													<i class="icon-angle-right"></i>
												</span>
                        Read More
                    </a>
                </div>
            </li>
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
        <li class="tr_all f_md_left t_md_align_c f_xs_none t_xs_align_l active">
            <article class="clearfix">
                <div
                    class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
                    <img src="images/thumbnails_img_1.jpg" alt="">
                </div>
                <p class="color_dark d_block lh_medium m_bottom_5 tr_all"><b>Think outside the box!</b></p>
                <ul class="dotted_list color_grey_light_2 article_stats">
                    <li class="m_right_15 relative d_inline_m">
												<span class="color_grey_light_2 fs_small">
													<i class="icon-picture"></i>
												</span>
                    </li>
                    <li class="m_right_15 relative d_inline_m">
												<span class="fs_small color_grey">
													<i>June 26, 2013</i>
												</span>
                    </li>
                    <li class="m_right_15 relative d_inline_m">
                        <span class="fs_small color_grey"><i>3D</i></span>,
                        <span class="fs_small color_grey"><i>Graphic Design</i></span>
                    </li>
                </ul>
            </article>
        </li>
        <li class="tr_all f_md_left t_md_align_c f_xs_none t_xs_align_l">
            <article class="clearfix">
                <div
                    class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
                    <img src="images/thumbnails_img_2.jpg" alt="">
                </div>
                <p class="color_dark d_block lh_medium m_bottom_5 tr_all"><b>The best priced product!</b></p>
                <ul class="dotted_list color_grey_light_2 article_stats">
                    <li class="m_right_15 relative d_inline_m">
												<span class="color_grey_light_2 fs_small">
													<i class="icon-doc-text-inv"></i>
												</span>
                    </li>
                    <li class="m_right_15 relative d_inline_m">
												<span class="fs_small color_grey">
													<i>June 29, 2013</i>
												</span>
                    </li>
                    <li class="m_right_15 relative d_inline_m">
                        <span class="fs_small color_grey"><i>Mobile</i></span>,
                        <span class="fs_small color_grey"><i>Technology</i></span>
                    </li>
                </ul>
            </article>
        </li>
        <li class="tr_all f_md_left t_md_align_c f_xs_none t_xs_align_l">
            <article class="clearfix">
                <div
                    class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
                    <img src="images/thumbnails_img_3.jpg" alt="">
                </div>
                <p class="color_dark d_block lh_medium m_bottom_5 tr_all"><b>Nam elit agna,endrerit sit amet,
                        tincidunt</b></p>
                <ul class="dotted_list color_grey_light_2 article_stats">
                    <li class="m_right_15 relative d_inline_m">
												<span class="color_grey_light_2 fs_small">
													<i class="icon-video"></i>
												</span>
                    </li>
                    <li class="m_right_15 relative d_inline_m">
												<span class="fs_small color_grey">
													<i>June 25, 2013</i>
												</span>
                    </li>
                    <li class="m_right_15 relative d_inline_m">
                        <span class="fs_small color_grey"><i>Video</i></span>,
                        <span class="fs_small color_grey"><i>Music</i></span>
                    </li>
                </ul>
            </article>
        </li>
        <li class="tr_all f_md_left t_md_align_c f_xs_none t_xs_align_l">
            <article class="clearfix">
                <div
                    class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
                    <img src="images/thumbnails_img_4.jpg" alt="">
                </div>
                <p class="color_dark d_block lh_medium m_bottom_5 tr_all"><b>Try The 30 Day Free Trial With All
                        Features </b></p>
                <ul class="dotted_list color_grey_light_2 article_stats">
                    <li class="m_right_15 relative d_inline_m">
												<span class="color_grey_light_2 fs_small">
													<i class="icon-link"></i>
												</span>
                    </li>
                    <li class="m_right_15 relative d_inline_m">
												<span class="fs_small color_grey">
													<i>May 9, 2013</i>
												</span>
                    </li>
                    <li class="m_right_15 relative d_inline_m">
                        <span class="fs_small color_grey"><i>Process</i></span>,
                        <span class="fs_small color_grey"><i>Technology</i></span>
                    </li>
                </ul>
            </article>
        </li>
    </ul>
</div>
</div>
</div>

</section>


@stop