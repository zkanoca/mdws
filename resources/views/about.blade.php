@extends('master')

@section('nav_about_current')
current
@stop

@section('content')

<section class="page_title translucent_bg_color_scheme image_bg_9 image_fixed t_align_c relative wrapper">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">About Mithat DURAK</h1>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="/" class="color_grey_light_3 d_inline_m m_right_10">Home</a><i
                    class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i></li>
            <li><a class="color_grey_light_3 d_inline_m">About Us</a></li>
        </ul>
    </div>
</section>
<section class="section_offset">
    <main class="container t_align_c">
        <h3 class="color_dark fw_light m_bottom_25 heading_1">
            @foreach($about as $a)
            {!! $a->title !!}
            @endforeach
        </h3>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_20">
                <img src="/images/home_img_1.jpg" class="r_corners" alt="">
            </div>
            <div class="col-lg-6 col-md-6 t_align_l">
                <div class="m_bottom_15 fw_light fs_large">
                    @foreach($about as $a)
                    {!! $a->content !!}
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</section>

@stop

